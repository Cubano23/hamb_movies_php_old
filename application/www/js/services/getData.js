


  let newSmall = document.createElement("small");
  let newImg = document.createElement("img");



   function performSearch(searchTerm){
   fetch("https://api.themoviedb.org/3/search/movie?api_key=1b5adf76a72a13bad99b8fc0c68cb085&query=" + searchTerm)

    .then((response) => { response.json()
            .then((value) => {
                for(let i = 0; i < value.results.length; i++){
                    newImg.src="https://image.tmdb.org/t/p/w185" + value.results[i].poster_path;
                
                    console.log(value.results[i].poster_path);
               
                    document.getElementById('gallery').appendChild(newImg);
               
                }
               
             
            });
    });
}

