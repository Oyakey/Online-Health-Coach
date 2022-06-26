<div class="bg-light">
    <div class="col-md-8 text-center m-auto pt-5 pb-6 container">
        <h2 class="mb-5">Trouver un autre cours ?</h2>
        <div class="autoComplete_wrapper" role="combobox" aria-owns="autoComplete_list_1" aria-haspopup="true" aria-expanded="false">
            <input class="form-control my-form-control" id="autoComplete" type="text" tabindex="1">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </div>
</div>

<script>
// The autoComplete.js Engine instance creator
const autoCompleteJS = new autoComplete({
    data: {
        src: async () => {
            try {
                // Loading placeholder text
                document
                    .getElementById("autoComplete")
                    .setAttribute("placeholder", "Chargement...");
                // Fetch External Data Source
                const source = await fetch(
                    "/app/themes/julien/blocs/getData.php?p=4", {username: "test"}
                );
                const data = await source.json();
                // Post Loading placeholder text
                document
                    .getElementById("autoComplete")
                    .setAttribute("placeholder", autoCompleteJS.placeHolder);
                // Returns Fetched data
                return data;
            } catch (error) {
                return error;
            }
        },
        keys: ["post_title"],
        cache: true,
    },
    placeHolder: "Rechercher un cours",
    resultsList: {
        element: (list, data) => {
            const info = document.createElement("p");
            if (data.results.length > 0) {
                info.innerHTML = `Affichage de <strong>${data.results.length}</strong> resultat(s) sur <strong>${data.matches.length}</strong> trouvé(s)`;
            } else {
                info.innerHTML = `<strong>${data.matches.length}</strong> résultat correspondant à <strong>"${data.query}"</strong>`;
            }
            list.prepend(info);
        },
        noResults: true,
        maxResults: 15,
        tabSelect: true
    },
    resultItem: {
        element: (item, data) => {
            item.innerHTML = `<span>${data.match}</span>`;
        },
        highlight: true
    },
    events: {
        input: {
            focus: () => {
                if (autoCompleteJS.input.value.length) autoCompleteJS.start();
            }
        }
    }
});

autoCompleteJS.input.addEventListener("selection", function (event) {
    const feedback = event.detail;
    autoCompleteJS.input.blur();

    window.location.href = feedback.selection.value.guid;
});

</script>