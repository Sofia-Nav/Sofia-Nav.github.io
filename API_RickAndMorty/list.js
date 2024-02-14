document.addEventListener("DOMContentLoaded", function() {
    var addBtn = document.getElementById("add-btn");
    var clearBtn = document.getElementById("clear-btn");
    var searchInput = document.getElementById("search-input");
    var searchBtn = document.getElementById("search-btn");

    async function fetchCharacters(name = '') {
        let url = 'https://rickandmortyapi.com/api/character';
        if (name) {
            url += `?name=${name}`;
        }
        const response = await fetch(url);
        return await response.json();
    }

    addBtn.addEventListener("click", async function() {
        try {
            const charactersData = await fetchCharacters();
            renderCharacters(charactersData);
        } catch (error) {
            console.error("Error al obtener datos del personaje:", error);
        }
    });

    clearBtn.addEventListener("click", function() {
        var itemList = document.getElementById("my-list");
        itemList.innerHTML = "";
    });

    searchBtn.addEventListener("click", async function() {
        try {
            const searchTerm = searchInput.value.toLowerCase();
            const charactersData = await fetchCharacters(searchTerm);
            renderCharacters(charactersData);
        } catch (error) {
            console.error("Error al obtener datos del personaje:", error);
        }
    });

    function renderCharacters(data) {
        var itemList = document.getElementById("my-list");
        itemList.innerHTML = ""; 
        data.results.forEach(function(character) {
            var name = character.name;
            var status = character.status;
            var species = character.species;
            var gender = character.gender;
            var image = character.image;

            var template = document.getElementById("list-template");
            var clone = template.content.cloneNode(true);

            var total = itemList.childElementCount + 1;
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
    }
});