const button = document.getElementById("myButton");
const levelInfo = document.getElementById("levelInfo");
const gameArea = document.getElementById("gameArea");

let clickCount = 0;
let level = 1;
let escapeTime = 500;
let escapeTimeoutId;

function moveButton() {
  const maxLeft = gameArea.clientWidth - button.offsetWidth;
  const maxTop = gameArea.clientHeight - button.offsetHeight;
  const newLeft = Math.random() * maxLeft + "px";
  const newTop = Math.random() * maxTop + "px";
  button.style.marginLeft = newLeft;
  button.style.marginTop = newTop;
}

function updateInfo() {
  levelInfo.textContent = `Level: ${level} | Clicks: ${clickCount}`;
}

button.addEventListener("mouseenter", () => {
  escapeTimeoutId = setTimeout(() => {
    moveButton();
  }, escapeTime);
});

button.addEventListener("mouseleave", () => {
  clearTimeout(escapeTimeoutId);
});

button.addEventListener("click", () => {
  clearTimeout(escapeTimeoutId);
  clickCount++;
  updateInfo();

  if (clickCount >= 3) {
    level++;
    clickCount = 0;

    if (level === 6) {
      escapeTime = 0;
    } else {
      escapeTime = Math.max(100, escapeTime - 100);
    }

    alert(
      "Level " + (level - 1) + " geçti! Yeni seviyeye hoş geldin!"
    );
  }

  moveButton();
});

moveButton();
updateInfo();
