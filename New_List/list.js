document.addEventListener("DOMContentLoaded", function() {
    var addBtn = document.getElementById("add-btn");
    var clearBtn = document.getElementById("clear-btn");
    var searchInput = document.getElementById("search-input");
    var searchBtn = document.getElementById("search-btn");

    addBtn.addEventListener("click", function() {
        fetch("https://rickandmortyapi.com/api/character/?name")
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                data.results.forEach(function(character) {
                    var name = character.name;
                    var status = character.status;
                    var species = character.species;
                    var gender = character.gender;
                    var image = character.image;

                    var itemList = document.getElementById("my-list");
                    var template = document.getElementById("list-template");
                    var total = itemList.childElementCount + 1;
                    var clone = template.content.cloneNode(true);

                    clone.querySelector("[data-id='number']").textContent = total;
                    clone.querySelector("[data-id='title']").textContent = name;
                    clone.querySelector("[data-id='content']").innerHTML = 
                        "<strong>Status:</strong> " + status + "<br>" +
                        "<strong>Species:</strong> " + species + "<br>" +
                        "<strong>Gender:</strong> " + gender;
                    var imgElement = clone.querySelector("[data-id='image']");
                    imgElement.setAttribute("src", image);
                    imgElement.style.display = "block";

                    itemList.appendChild(clone);
                });
            })
            .catch(function(error) {
                console.error("Error al obtener datos del personaje:", error);
            });
    });

    clearBtn.addEventListener("click", function() {
        var itemList = document.getElementById("my-list");
        itemList.innerHTML = "";
    });

    searchBtn.addEventListener("click", function() {
        var searchTerm = searchInput.value.toLowerCase();
        var characters = document.querySelectorAll("[data-id='title']");
        characters.forEach(function(character) {
            var name = character.textContent.toLowerCase();
            var parentListItem = character.closest("li");
            if (name.includes(searchTerm)) {
                parentListItem.style.display = "block";
            } else {
                parentListItem.style.display = "none";
            }
        });
    });
});