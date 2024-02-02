document.addEventListener("DOMContentLoaded", function() {
    const addBtn = document.getElementById("add-btn");
    const clearBtn = document.getElementById("clear-btn");
    const lista = document.getElementById("lista");
  
    addBtn.addEventListener("click", function() {
      fetchCharacter();
    });
  
    clearBtn.addEventListener("click", function() {
      lista.innerHTML = "";
    });
  
    async function fetchCharacter() {
      try {
        const response = await fetch("https://rickandmortyapi.com/api/character");
        const data = await response.json();
        const character = data.results[Math.floor(Math.random() * data.results.length)];
        renderCharacter(character);
      } catch (error) {
        console.error("Error al obtener datos:", error);
      }
    }
  
    function renderCharacter(character) {
      const characterCard = document.createElement("div");
      characterCard.classList.add("item-card");
  
      const image = document.createElement("img");
      image.src = character.image;
      image.alt = character.name;
      image.classList.add("character-image");
  
      const id = document.createElement("p");
      id.textContent = "ID: " + character.id;
  
      const name = document.createElement("p");
      name.textContent = "Nombre: " + character.name;
  
      const status = document.createElement("p");
      status.textContent = "Estado: " + character.status;
  
      const species = document.createElement("p");
      species.textContent = "Especie: " + character.species;
  
      const type = document.createElement("p");
      type.textContent = "Tipo: " + character.type;
  
      const gender = document.createElement("p");
      gender.textContent = "Género: " + character.gender;
  
      characterCard.appendChild(image);
      characterCard.appendChild(id);
      characterCard.appendChild(name);
      characterCard.appendChild(status);
      characterCard.appendChild(species);
      characterCard.appendChild(type);
      characterCard.appendChild(gender);
      lista.appendChild(characterCard);
    }
  });