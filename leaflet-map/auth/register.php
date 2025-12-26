<?php
include 'db.php';
include 'auth_check.php';
redirectIfLoggedIn();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Create Account</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex">

<!-- LEFT BACKGROUND -->
<div class="hidden lg:block w-2/3 bg-cover bg-center relative"
     style="background-image:url('your-bg-image.jpg')">
    <div class="absolute inset-0 bg-black/50"></div>
</div>

<!-- RIGHT FORM -->
<div class="w-full lg:w-1/3 bg-white flex items-center justify-center">
    <div class="w-full max-w-md px-6">

        <!-- LOGO -->
        <div class="mb-6 text-center">
            <h1 class="text-xl font-bold text-blue-600">Create an account</h1>
            <p class="text-sm text-gray-500">Sign up now</p>
        </div>

        <!-- TABS -->
        <div class="flex border-b mb-6">
            <button id="customerTab"
                class="flex-1 py-2 text-sm font-medium border-b-2 border-blue-600 text-blue-600">
                Customer
            </button>
            <button id="mediaTab"
                class="flex-1 py-2 text-sm font-medium border-b-2 border-transparent text-gray-400">
                Media Company
            </button>
        </div>

        <!-- CUSTOMER FORM -->
        <form id="customerForm" method="POST" action="register_process.php" class="space-y-4">
            <input type="hidden" name="account_type" value="customer">

            <input type="text" name="username" required
                class="w-full border px-3 py-2 rounded"
                placeholder="Username">

            <input type="email" name="email" required
                class="w-full border px-3 py-2 rounded"
                placeholder="Email address">

            <input type="password" name="password" required
                class="w-full border px-3 py-2 rounded"
                placeholder="Password">

            <input type="password" name="password_confirm" required
                class="w-full border px-3 py-2 rounded"
                placeholder="Verify password">

            <input type="text" name="phone"
                class="w-full border px-3 py-2 rounded"
                placeholder="Phone number">
            
            <div class="space-y-2">
                <p class="text-sm font-medium text-gray-700">Subscriber Type</p>

                <div class="grid grid-cols-2 gap-2 text-sm text-gray-600">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="subscriber_type[]" value="enterprise"
                            class="accent-blue-600">
                        enterprise
                    </label>

                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="subscriber_type[]" value="local_government"
                            class="accent-blue-600">
                        local government
                    </label>

                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="subscriber_type[]" value="public_institutions"
                            class="accent-blue-600">
                        public institutions
                    </label>

                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="subscriber_type[]" value="organization"
                            class="accent-blue-600">
                        organization
                    </label>

                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="subscriber_type[]" value="individual"
                            class="accent-blue-600">
                        individual
                    </label>

                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="subscriber_type[]" value="etc"
                            class="accent-blue-600">
                        etc
                    </label>
                </div>
            </div>

            <hr> 
            <div class="space-y-2 text-xs text-gray-600">
                <label class="flex items-center gap-2">
                    <input type="checkbox" required>
                    [Required] Must be 14 years of age or older
                </label>
                <label class="flex items-center gap-2">
                    <input type="checkbox" required>
                    [Required] Agree to Terms of Service > 
                    <a class="text-blue-700" href="./assets/TermsAndConditions.pdf">View</a>
                </label>
                <label class="flex items-center gap-2">
                    <input type="checkbox" required>
                    [Required] Consent to collection and use of personal information > 
                    <a class="text-blue-700" href="./assets/CollectionOfPersonalInformation.pdf">View</a>
                </label>
                
                <label class="flex items-center gap-2">
                    <input type="checkbox" required>
                    [Optional] Agree to receive promotional and marketing information > 
                    <a class="text-blue-700" href="./assets/PromotionAndMarketing.pdf">View</a>
                </label>
            </div>

            <button
                class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                Join the membership
            </button>
        </form>

        <!-- MEDIA COMPANY FORM -->
        <form id="mediaForm" method="POST" action="register_process.php"
            class="space-y-4 hidden">

            <input type="hidden" name="account_type" value="media_company">

            <input type="text" name="username" required
                class="w-full border px-3 py-2 rounded"
                placeholder="Username">

            <input type="text" name="company_name" required
                class="w-full border px-3 py-2 rounded"
                placeholder="Company name">

            <input type="email" name="email" required
                class="w-full border px-3 py-2 rounded"
                placeholder="Email address">

            <input type="password" name="password" required
                class="w-full border px-3 py-2 rounded"
                placeholder="Password">

            <input type="password" name="password_confirm" required
                class="w-full border px-3 py-2 rounded"
                placeholder="Verify password">

            <input type="text" name="phone"
                class="w-full border px-3 py-2 rounded"
                placeholder="Phone number">

                <div class="space-y-2 text-xs text-gray-600">
                <label class="flex items-center gap-2">
                    <input type="checkbox" required>
                    [Required] Must be 14 years of age or older
                </label>
                <label class="flex items-center gap-2">
                    <input type="checkbox" required>
                    [Required] Agree to Terms of Service > 
                    <a class="text-blue-700" href="./assets/TermsAndConditions.pdf">View</a>
                </label>
                <label class="flex items-center gap-2">
                    <input type="checkbox" required>
                    [Required] Consent to collection and use of personal information > 
                    <a class="text-blue-700" href="./assets/CollectionOfPersonalInformation.pdf">View</a>
                </label>
                
                <label class="flex items-center gap-2">
                    <input type="checkbox" required>
                    [Optional] Agree to receive promotional and marketing information > 
                    <a class="text-blue-700" href="./assets/PromotionAndMarketing.pdf">View</a>
                </label>
            </div>
            <button
                class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                Join the membership
            </button>
        </form>

        <p class="mt-6 text-center text-sm">
            If you already have an account,
            <a href="login.php" class="text-blue-600">log in</a>
        </p>
        
        <p class="mt-6 text-center text-sm">
            © 2025 Advertising Play
        </p>
    </div>
</div>

<!-- JS TAB SWITCH -->
<script>
    const customerTab = document.getElementById('customerTab');
    const mediaTab = document.getElementById('mediaTab');
    const customerForm = document.getElementById('customerForm');
    const mediaForm = document.getElementById('mediaForm');

    customerTab.onclick = () => {
        // Show/hide forms
        customerForm.classList.remove('hidden');
        mediaForm.classList.add('hidden');

        // Set active/inactive tab classes
        customerTab.classList.add('border-blue-600','text-blue-600');
        customerTab.classList.remove('border-transparent','text-gray-400');

        mediaTab.classList.add('border-transparent','text-gray-400');
        mediaTab.classList.remove('border-blue-600','text-blue-600');
    };

    mediaTab.onclick = () => {
        customerForm.classList.add('hidden');
        mediaForm.classList.remove('hidden');

        mediaTab.classList.add('border-blue-600','text-blue-600');
        mediaTab.classList.remove('border-transparent','text-gray-400');

        customerTab.classList.add('border-transparent','text-gray-400');
        customerTab.classList.remove('border-blue-600','text-blue-600');
    };
</script>

</body>
</html>
