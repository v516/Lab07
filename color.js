function changeParagraphColor() {
    // Get input values
    var borderR = document.getElementById("border_R").value;
    var borderG = document.getElementById("border_G").value;
    var borderB = document.getElementById("border_B").value;
    var borderWidth = document.getElementById("border_width").value;
    var bgR = document.getElementById("bg_R").value;
    var bgG = document.getElementById("bg_G").value;
    var bgB = document.getElementById("bg_B").value;

    // Get the paragraph element
    var paragraph = document.getElementById("paragraph");

    // Set the border color and width
    paragraph.style.borderColor = `rgb(${borderR}, ${borderG}, ${borderB})`;
    paragraph.style.borderWidth = `${borderWidth}px`;

    // Set the background color
    paragraph.style.backgroundColor = `rgb(${bgR}, ${bgG}, ${bgB})`;
}
