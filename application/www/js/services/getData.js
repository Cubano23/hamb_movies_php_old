   let fragment = document.createDocumentFragment(),
   newImg = document.createElement("img");

   let fragment2 = document.createDocumentFragment(),
   title = document.createElement("p");

   function performSearch(searchTerm){
    document.getElementById('title-film').innerHTML = "";
    document.getElementById('gallery').innerHTML = "";
   fetch("https://api.themoviedb.org/3/search/movie?api_key=1b5adf76a72a13bad99b8fc0c68cb085&query=" + searchTerm)

    .then((response) => { response.json()
            .then((value) => {
                fragment.appendChild(newImg);
                fragment.appendChild(title);
                for(let i = 0; i < value.results.length; i++){

                    newImg.src = "https://image.tmdb.org/t/p/w185" + value.results[i].poster_path; 
                    fragment.appendChild(newImg.cloneNode(true)); 
                    
                    title.innerHTML = value.results[i].title + "<p>" + value.results[i].release_date + 
                    "</p>" + "<p>Popularity:</p> " + "<div class='popularity'>" + value.results[i].popularity + "</div>" ;
                    fragment.appendChild(title.cloneNode(true)); 

                            
                }
                document.getElementById('gallery').appendChild(fragment);
                document.getElementById('title-film').appendChild(fragment);

                    
                    console.log(value.results); 
                             
               
             
            });
    });

}


