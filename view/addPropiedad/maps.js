(function ($) {
  let map, marker;

  function verificarDependencias() {
    if (typeof google === "undefined" || typeof google.maps === "undefined") {
      console.error("Google Maps API no está cargada");
      return false;
    }
    if (typeof jQuery === "undefined") {
      console.error("jQuery no está cargado");
      return false;
    }
    return true;
  }

  function initMap() {
    if (!verificarDependencias()) {
      console.error("Falta cargar dependencias necesarias");
      return;
    }

    try {
      const ubicacionPredeterminada = { lat: -12.0464, lng: -77.0428 };
      const mapElement = document.getElementById("map");

      if (!mapElement) {
        console.error("Elemento del mapa no encontrado");
        return;
      }

      map = new google.maps.Map(mapElement, {
        center: ubicacionPredeterminada,
        zoom: 13,
        mapId: "map",
      });

      const { AdvancedMarkerElement } = google.maps.marker;
      marker = new AdvancedMarkerElement({
        position: ubicacionPredeterminada,
        title: "Ubicación inicial",
        map: map,
        draggable: false,
      });

      map.addListener("click", (event) => {
        const nuevaUbicacion = event.latLng;
        marker.position = nuevaUbicacion;
        actualizarCoordenadas(nuevaUbicacion);
      });

      console.log("Mapa inicializado correctamente");
    } catch (error) {
      console.error("Error al inicializar el mapa:", error);
    }
  }

  function actualizarCoordenadas(posicion) {
    try {
      const latElement = document.getElementById("latitude");
      const lngElement = document.getElementById("longitude");

      if (!latElement || !lngElement) {
        console.error("Elementos de coordenadas no encontrados");
        return;
      }

      latElement.value = posicion.lat();
      lngElement.value = posicion.lng();
    } catch (error) {
      console.error("Error al actualizar coordenadas:", error);
    }
  }

  function geocodeAddress() {
    try {
      if (!verificarDependencias()) return;

      const geocoder = new google.maps.Geocoder();
      const componentesDireccion = [
        $("#address").val(),
        $("#urbanization").val(),
        $("#districts_id option:selected").text(),
        $("#province_id option:selected").text(),
        $("#department_id option:selected").text(),
        "Perú",
      ]
        .filter(Boolean)
        .join(", ");

      geocoder.geocode(
        { address: componentesDireccion, region: "PE" },
        (results, status) => {
          if (status === "OK" && results[0]) {
            const ubicacion = results[0].geometry.location;
            map.setCenter(ubicacion);
            marker.position = ubicacion;
            actualizarCoordenadas(ubicacion);
            map.setZoom(16);
            console.log("Ubicación encontrada:", componentesDireccion);
          } else {
            console.error("Error en geocodificación:", status);
            alert("No se pudo encontrar la ubicación: " + status);
          }
        }
      );
    } catch (error) {
      console.error("Error en geocodeAddress:", error);
    }
  }

  $(document).ready(function () {
    $('input[name="locationType"]').on("change", function () {
      if (marker && marker.position) {
        actualizarCoordenadas(marker.position);
      }
    });
  });
  

  window.initMap = initMap;
  window.geocodeAddress = geocodeAddress;
})(jQuery);
