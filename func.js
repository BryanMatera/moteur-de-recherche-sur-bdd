$(document).ready(function()
{

	$('#search').keyup(function()
	{

		var search = $(this).val();

		search = $.trim(search);

		// $('#resultat').text(search);
		
			if(search !=="")
			{
				$.post('post.php',{search:search},function(data)
				{

					$('#resultat').html(data);	
				
				});

			}
	});
});