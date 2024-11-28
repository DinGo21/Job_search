const path = window.location.pathname.split('/').pop();

function indexEvents()
{
	const input = document.getElementById('input');

	if (!input)
		return ;
	input.addEventListener('input', function ()
	{
		  const filter = this.value.toUpperCase();
		  const table = document.getElementById("table");
		  const rows = table.querySelectorAll(".row");
		let	  cell, value;
	
		for (let i = 0; i < rows.length; i++) 
		{
			cell = rows[i].querySelectorAll('.cell')[0];
			value = cell.textContent || cell.innerText;
			rows[i].style.display = "none";
			if (value.toUpperCase().indexOf(filter) > -1)
			{
				rows[i].style.display = "";
			}
		}
	});
}

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

setHeaderLinkActive(path);
indexEvents();
timestampsFormat();