
    document.addEventListener("DOMContentLoaded", function() {
        function changeColor() {
            document.getElementById('heading').style.color = "blue";
        }
        document.getElementById('button').addEventListener("click", changeColor);
    });

