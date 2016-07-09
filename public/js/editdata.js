window.addEventListener('load', editData);

function editData()
{
    var btn = document.getElementById('editbtn');
    if(btn)
    {
        btn.addEventListener('click', function()
        {
            var id = document.getElementById('player').value;
            window.location.href = '/editdata/'+id;
        });
    }
}