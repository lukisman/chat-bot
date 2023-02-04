<?php

$input = strtolower(readline("You: "));

if ($input == "hi" || $input == "hello") {
    echo "Chatbot: Hello! How can I help you today?\n";
} elseif ($input == "what's your name?") {
    echo "Chatbot: I am a chatbot, I don't have a name.\n";
} elseif ($input == "what can you do?") {
    echo "Chatbot: I can answer your questions, chat with you, and perform simple tasks.\n";
} elseif ($input == "bye") {
    echo "Chatbot: Goodbye! Have a great day!\n";
} else {
    echo "Chatbot: I am sorry, I do not understand what you are saying.\n";
}

?>
