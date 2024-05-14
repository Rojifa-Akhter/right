<!-- Add dropdowns for selecting location, season, and soil -->
<select id="location">
    <option value="">Select Location</option>
    @foreach($locations as $location)
        <option value="{{ $location->id }}">{{ $location->city_name }}</option>
    @endforeach
</select>

<select id="season">
    <option value="">Select Season</option>
    @foreach($seasons as $season)
        <option value="{{ $season->id }}">{{ $season->name }}</option>
    @endforeach
</select>

<select id="soil">
    <option value="">Select Soil</option>
    @foreach($soils as $soil)
        <option value="{{ $soil->id }}">{{ $soil->soil_type }}</option>
    @endforeach
</select>

<button id="recommendBtn">Recommend Crops</button>

<!-- Container to display recommended crops -->
<div id="recommendedCrops"></div>

<script>
document.getElementById('recommendBtn').addEventListener('click', function() {
    var locationId = document.getElementById('location').value;
    var seasonId = document.getElementById('season').value;
    var soilId = document.getElementById('soil').value;

    if (locationId && seasonId && soilId) {
        // Make AJAX request
        axios.post('/recommendCrop', {
            location_id: locationId,
            season_id: seasonId,
            soil_id: soilId
        })
        .then(function (response) {
            // Display recommended crops
            var crops = response.data.crops;
            var cropsHtml = '<h3>Recommended Crops:</h3><ul>';
            crops.forEach(function(crop) {
                cropsHtml += '<li>' + crop.name + '</li>';
            });
            cropsHtml += '</ul>';
            document.getElementById('recommendedCrops').innerHTML = cropsHtml;
        })
        .catch(function (error) {
            console.error(error);
        });
    } else {
        alert('Please select location, season, and soil.');
    }
});
</script>
