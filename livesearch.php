<?php
include("config.php");
if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $query = "SELECT * FROM `food_items` WHERE `name` LIKE '{$input}%'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
?>
<table class="table border-collapse border border-black mt-4">
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Ordered</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row["name"];
            $price = $row["price"];
            $ordered = $row["ordered"];
        }
        ?>
        <tr>
            <td>
                <?php echo $name; ?>
            </td>
            <td>
                <?php echo $price; ?>
            </td>
            <td>
                <?php echo $ordered; ?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<?php
}
?>