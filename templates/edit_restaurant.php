<form action="../actions/save_restaurant.php" method="post" id="editRestaurant">

    <input type="hidden" name="id" value="<?=$restaurant['id']?>">
   
    <label>Restaurant Name:
        <input type="text" name="name" value="<?=$restaurant['name']?>">
    </label>

    <label>Country:
        <input type="text" name="country" value="<?=$restaurant['country']?>">
    </label>

    <label>City:
        <input type="text" name="city" value="<?=$restaurant['city']?>">
    </label>

    <label>Street:
        <input type="text" name="street" value="<?=$restaurant['street']?>">
    </label>

    <label>Zipcode:
        <input type="text" name="zipcode" value="<?=$restaurant['zipcode']?>">
    </label>
    
    <label>Price:
        <input type="number" name="price" value="<?=$restaurant['price']?>" min="0" max="1000" step="0.01">
    </label>

    <label>Category(ies):
        <textarea name="description"><?=$restaurant['description']?></textarea>
    </label>

    <label>Opening Time:
        <input type="time" name="open" value="<?=$restaurant['open']?>" >
    </label>

    <label>Closing Time:
        <input type="time" name="close" value="<?=$restaurant['close']?>">
    </label>

    <input type="submit" name="submit" value="Save" id="buttonSave">
</form>

<?php 
    $linkAddressImage = "../pages/upload_photo_restaurant.php?id=" . $restaurant['id'];
?>

<form id="addphoto" action="<?=$linkAddressImage?>" method="post">
    <input id="upload" type="submit" value="Add Photo" />
</form>