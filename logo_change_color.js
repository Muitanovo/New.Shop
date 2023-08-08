const colors = ['red','orange', 'yellow', 'lime', 'deepskyblue','blue','purple','white'];
let currentColorIndex = 0;

function changeHeaderColor() {
  const header = document.getElementById('changeColor');

  // Применяем текущий цвет к заголовку
  header.style.color = colors[currentColorIndex];

  // Увеличиваем индекс текущего цвета для следующего клика
  currentColorIndex = (currentColorIndex + 1) % colors.length;
}