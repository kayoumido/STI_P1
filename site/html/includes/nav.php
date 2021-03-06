<?php
require_once('authorization.php');

use Messenger\Authorization;
?>
<nav class="navigation d-flex flex-column text-center navbar navbar-light hide-scrollbar">
    <!-- Brand -->
    <a href="index.php" title="Messenger" class="d-none d-xl-block mb-6">
        <svg width="46px" height="46px" fill="currentColor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 46 46" enable-background="new 0 0 46 46" xml:space="preserve">
                        <polygon opacity="0.7" points="45,11 36,11 35.5,1 "></polygon>
            <polygon points="35.5,1 25.4,14.1 39,21 "></polygon>
            <polygon opacity="0.4" points="17,9.8 39,21 17,26 "></polygon>
            <polygon opacity="0.7" points="2,12 17,26 17,9.8 "></polygon>
            <polygon opacity="0.7" points="17,26 39,21 28,36 "></polygon>
            <polygon points="28,36 4.5,44 17,26 "></polygon>
            <polygon points="17,26 1,26 10.8,20.1 "></polygon>
        </svg>
    </a>

    <!-- Nav items -->
    <ul class="d-flex nav navbar-nav flex-row flex-xl-column flex-grow-1 justify-content-between justify-content-xl-center align-items-center w-100 py-4 py-lg-2 px-lg-3" role="tablist">
        <!-- Invisible item to center nav vertically -->
        <li class="nav-item d-none d-xl-block invisible flex-xl-grow-1">
            <a class="nav-link py-0 py-lg-8" href="index.php" title="Home">
                <div class="icon icon-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </div>
            </a>
        </li>

        <!-- New chat -->
        <li class="nav-item">
            <a class="nav-link py-0 py-lg-8" id="tab-create-chat" href="compose.php" title="Send new message" >
                <div class="icon icon-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                </div>
            </a>
        </li>

        <!-- Chats -->
        <li class="nav-item">
            <a class="nav-link py-0 py-lg-8" id="tab-chats" href="inbox.php" title="Inbox">
                <div class="icon icon-xl icon-badged">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                    <div class="badge badge-circle bg-primary">
                        <span></span>
                    </div>
                </div>
            </a>
        </li>

        <!-- Admin -->
        <?php if (Authorization::access(Authorization::ADMIN)): ?>
        <li class="nav-item d-none d-xl-block">
            <a class="nav-link py-0 py-lg-8" id="tab-settings" href="admin.php" title="Admin">
                <div class="icon icon-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                </div>
            </a>
        </li>
        <?php endif; ?>

        <!-- Profile -->
        <li class="nav-item">
            <a href="profile.php" class="nav-link p-0 mt-lg-2">
                <div class="avatar avatar-online mx-auto">
                    <img class="avatar-img" src="assets/img/1.jpg" alt="">
                </div>
            </a>
        </li>
    </ul>
</nav>
