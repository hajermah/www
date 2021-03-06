window.onload = function() {


let btnSearch = document.querySelector('#btnSearch');

if (btnSearch) {

    btnSearch.addEventListener('click', searchMovies);

}

function searchMovies() {

    let inputData = document.querySelector('#search').value;

    let xhttp = new XMLHttpRequest();
    xhttp.open("GET",  "https://api.themoviedb.org/3/search/movie?api_key=c3568fa2093e83bc9999ba366802f9c7&language=fr&page=1&include_adult=false&query=" + inputData);
    xhttp.send();

    xhttp.onreadystatechange = function() {

        if (this.readyState === 4 && this.status === 200) {

            let dataApi = JSON.parse(this.responseText);
            console.log(dataApi);

            let html = '';

            let content = document.querySelector('#content');

            for (movie of dataApi.results) {

                html += '       <div class="card">' +
                '            <div class="img_movie"><img src="https://image.tmdb.org/t/p/w500/' + movie.poster_path + '" alt="">' +
                '            <p class="txt_movie">' + movie.title + '</p>' +
                '        </div>'

            }

            contentMovies.innerHTML = html;

        }

    }

}


}