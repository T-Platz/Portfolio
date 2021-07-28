<?php
    session_start();

    if (password_verify($_POST["password"], '$2y$10$igZe3HBy8nPFz361rsB87upIUMHaJQnZegBI.2p6MSOpCixUpVo4u')) {
        $_SESSION["show_cv"] = 1;
    } else if (password_verify($_POST["password"], '$2y$10$st.94803uY0Yo2zzUFVIqOq3XhxfNkJaljmzn/yLzgIta2/0pMPDy')) {
        $_SESSION["show_cv"] = 2;
    } else {
        $_SESSION["show_cv"] = -1;
    }

    header("Location: /cv/", true, 303);
?>