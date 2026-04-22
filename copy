<?php
$message = "";
$status = ""; // Added to track success or error for styling

function fileUpload() {
    global $message, $status;
    $target_dir = "uploads/";
    
    // Ensure directory exists
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $file_type = $_FILES["fileToUpload"]["type"];
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    if ($file_type != "image/png") {
        $message = "Only PNG files are allowed.";
        $status = "error";
        return;
    }

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $message = "File uploaded successfully as $file_type";
        $status = "success";
    } else {
        $message = "Internal server error during upload.";
        $status = "error";
    }
}

if (isset($_POST["upload"])) {
    fileUpload();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP File Handling Lesson</title>
</head>
<body class="bg-slate-50 min-h-screen flex items-center justify-center p-6">

    <div class="max-w-md w-full bg-white rounded-xl shadow-lg p-8 border border-slate-200">
        <h2 class="text-2xl font-bold text-slate-800 mb-2 text-center">File Handling</h2>
        
        <form method="post" enctype="multipart/form-data" class="space-y-6">
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Select Image (PNG only)</label>
                <input type="file" name="fileToUpload" id="fileToUpload" 
                    class="block w-full text-sm text-slate-500
                    file:mr-4 file:py-2 file:px-4
                    file:rounded-full file:border-0
                    file:text-sm file:font-semibold
                    file:bg-indigo-50 file:text-indigo-700
                    hover:file:bg-indigo-100
                    border border-slate-200 rounded-lg p-2 bg-slate-50 cursor-pointer focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <button type="submit" name="upload" 
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-4 rounded-lg transition duration-200 ease-in-out transform active:scale-95 shadow-md">
                Upload to Server
            </button>
        </form>

        <?php if ($message): ?>
            <div class="mt-6 p-4 rounded-lg flex items-center gap-3 <?php echo $status === 'success' ? 'bg-emerald-50 text-emerald-700 border border-emerald-200' : 'bg-rose-50 text-rose-700 border border-rose-200'; ?>">
                <?php if ($status === 'success'): ?>
                    <span class="text-xl">✅</span>
                <?php else: ?>
                    <span class="text-xl">⚠️</span>
                <?php endif; ?>
                <span class="text-sm font-medium"><?php echo $message; ?></span>
            </div>
        <?php endif; ?>
    </div>

</body>
</html>