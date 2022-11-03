const logButton = document.getElementById('log');
const regisButton = document.getElementById('regis');
const container = document.getElementById('container');

regisButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

logButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});