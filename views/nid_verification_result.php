<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NID Verification Result</title>
</head>
<body>

<h1>NID Verification Result</h1>

<?php if (isset($response_data['data']['nid'])): ?>
    <h3>Personal Information</h3>
    <p><strong>Full Name (EN):</strong> <?= $response_data['data']['nid']['fullNameEN']; ?></p>
    <p><strong>Father's Name (EN):</strong> <?= $response_data['data']['nid']['fathersNameEN']; ?></p>
    <p><strong>Mother's Name (EN):</strong> <?= $response_data['data']['nid']['mothersNameEN']; ?></p>
    <p><strong>Date of Birth:</strong> <?= $response_data['data']['nid']['dateOfBirth']; ?></p>
    <p><strong>National ID Number:</strong> <?= $response_data['data']['nid']['nationalIdNumber']; ?></p>
    <p><strong>Gender:</strong> <?= $response_data['data']['nid']['gender']; ?></p>
    <p><strong>Profession:</strong> <?= $response_data['data']['nid']['profession']; ?></p>
    <p><strong>Present Address (EN):</strong> <?= $response_data['data']['nid']['presentAddressEN']; ?></p>
    <p><strong>Permanent Address (EN):</strong> <?= $response_data['data']['nid']['permenantAddressEN']; ?></p>

    <h3>Bangla Information</h3>
    <p><strong>Full Name (BN):</strong> <?= $response_data['data']['nid']['fullNameBN']; ?></p>
    <p><strong>Father's Name (BN):</strong> <?= $response_data['data']['nid']['fathersNameBN']; ?></p>
    <p><strong>Mother's Name (BN):</strong> <?= $response_data['data']['nid']['mothersNameBN']; ?></p>
    <p><strong>Present Address (BN):</strong> <?= $response_data['data']['nid']['presentAddressBN']; ?></p>
    <p><strong>Permanent Address (BN):</strong> <?= $response_data['data']['nid']['permanentAddressBN']; ?></p>
    <p>
    	<img src="<?= $response_data['data']['nid']['photoUrl']; ?>"> 
    </p>


<?php else: ?>
    <p>No data found or an error occurred.</p>
<?php endif; ?>

</body>
</html>
