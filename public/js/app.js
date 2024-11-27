const PATH = window.location.pathname.split('/').pop();

function timestampsFormat()
{
	const createdAt = document.querySelectorAll("#createdAt");
	const updatedAt = document.querySelectorAll("#updatedAt");

	createdAt.forEach((span) => span.innerText = span.innerText.split(' ')[0]);
	updatedAt.forEach((span) => span.innerText = span.innerText.split(' ')[0]);
}

function setHeaderLinkActive(path)
{
	const index = document.getElementById("index");

	if (!path)
	{
		index.classList.add("headerLinkActive");
	}
}

setHeaderLinkActive(PATH);
timestampsFormat();
