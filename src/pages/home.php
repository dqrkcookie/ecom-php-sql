<?php

include('../../config/conn.php');
session_start();

$sql = "SELECT * FROM brylle_items";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <link rel="stylesheet" href="../style/output.css">
</head>
<body>

<nav class="bg-white shadow-md mb-6">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-16">
      <div class="flex items-center">
        <span class="text-xl font-bold text-gray-800 ml-4">Logo</span>
      </div>
      <div>
        <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors" popovertarget="add">
          Add item
        </button>
      </div>
    </div>
  </div>
</nav>

<div id="add" popover>
  <form class="max-w-md mx-auto space-y-4" action="../../remote/add.php" method="POST">
    <input 
      class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
      type="text" 
      placeholder="Item name" 
      name="name"
    >
    <input 
      class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
      type="text" 
      placeholder="Item detail" 
      name="details"
    >
    <input 
      class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
      type="text" 
      placeholder="Price" 
      name="price"
    >
    <input 
      class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition-colors" 
      type="submit" 
      value="Add now" 
      name="add"
    >
  </form>
</div>

<div class="flex justify-center">
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-2">
    <?php while ($data = $result->fetch_array()) { ?>
      <div class="bg-gray-200 shadow-md rounded-lg p-4 w-80 border border-gray-200 m-2 flex flex-col h-full">
        <div class="flex justify-between items-center mb-3">
          <h3 class="text-lg font-bold text-gray-800"><?php echo $data['product_name'] ?></h3>
          <span class="text-green-600 font-semibold"><?php echo '₱' . $data['price'] ?></span>
        </div>
        <p class="text-gray-600 text-sm mb-4 flex-grow"><?php echo $data['product_details'] ?></p>
        <div class="space-y-2">
          <div class="flex space-x-2">
            <button 
              popovertarget="view" 
              class="flex-1 bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition-colors"
            >
              View Details
            </button>
            <button 
              popovertarget="update" 
              class="flex-1 bg-orange-500 text-white py-2 rounded hover:bg-orange-600 transition-colors"
            >
              Update
            </button>
          </div>
          <a href="../../remote/delete.php?id=<?php echo $data['id']; ?>" class="block">
            <button class="w-full bg-red-500 text-white py-2 rounded hover:bg-red-600 transition-colors">
              Delete
            </button>
          </a>
        </div>
        <div popover id="view" class="bg-white shadow-md rounded-lg p-6 max-w-md mx-auto">
          <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center border-b pb-3">ITEM DETAILS</h1>
          <div class="space-y-4">
            <div>
              <label class="block text-sm font-medium text-gray-600 mb-1">Item name:</label>
              <h3 class="text-lg font-semibold text-gray-800 bg-gray-100 p-2 rounded"><?php echo $data['product_name']; ?></h3>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-600 mb-1">Item details:</label>
              <h3 class="text-base text-gray-700 bg-gray-100 p-2 rounded"><?php echo $data['product_details']; ?></h3>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-600 mb-1">Item price:</label>
              <h3 class="text-xl font-bold text-green-600 bg-green-50 p-2 rounded"><?php echo '₱' . $data['price']; ?></h3>
            </div>
          </div>
        </div>
        <div popover id="update" class="p-6 bg-white shadow-lg rounded-lg max-w-md mx-auto">
          <form class="space-y-4" action="../../remote/update.php" method="GET">
            <input 
              type="text" 
              placeholder="Update name" 
              value="<?php echo $data['product_name']; ?>"
              name="name"
              class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
            <input 
              type="text" 
              placeholder="Update details" 
              value="<?php echo $data['product_details']; ?>"
              name="details"
              class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
            <input 
              type="text" 
              placeholder="Update price" 
              value="<?php echo $data['price']; ?>"
              name="price"
              class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
            <button 
              type="submit" 
              class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition-colors duration-300"
            >
              Update
            </button>
          </form>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
</body>
</html>
