$(document).ready(function() {
    $("#nav_list a").click(function(e) {
        e.preventDefault();

        const jsonFile = "json_files/" + $(this).attr("title") + ".json";

        fetch(jsonFile)
            .then(response => {
                if (!response.ok) {
                    throw new Error("Network response was not ok");
                }
                return response.json();
            })
            .then(data => {
                const speaker = data.speakers[0];
                $("main").empty();

                const content = `
                    <h1>${speaker.title}</h1>
                    <img src="${speaker.image}" alt="${speaker.speaker}">
                    <h2>${speaker.month}<br>${speaker.speaker}</h2>
                    <p>${speaker.text}</p>
                `;
                $("main").html(content);
            })
            .catch(error => {
                console.error("Error fetching JSON:", error);
                $("main").html("<p>Error loading speaker data.</p>");
            });
    });
});