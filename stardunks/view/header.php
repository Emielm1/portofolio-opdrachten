<style>
    table {
        border-collapse: collapse;
    }

    table, td, th {
        border: 1px solid black;

    }


    .button {
        background-color: #008CBA;
        border: none;
        color: white;
        padding: 15px 32px;
        border-radius: 12px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
    .button2 {
        background-color: #26272B;
        border: none;
        color: white;
        padding: 8px 16px;
        border-radius: 12px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
</style>

<h1>Read products</h1>
<form  id="submit form" method="post" action="?op=create">
    <button class="button" type="submit" value="submit form">Create new product </button>
</form>


<form id="search" class="navtxts" method="GET">
    <input type="hidden" name="op" value="search">
    <input class="input-group-prepend btntxt" type="text" placeholder="search products" name="query" aria-describedby="basic-addon2">
    <button class="button2" type="submit" value="search"> Search</button>
</form>
