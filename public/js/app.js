const path = window.location.pathname.split('/').pop();

function setHeaderLinkActive(path)
{
	const index = document.getElementById("index");

	if (!path)
	{
		index.classList.add("headerLinkActive");
	}
}

setHeaderLinkActive(path);
