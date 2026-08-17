# The Maine Trail

**Kaitlyn Walsh**  
**CIS333 Final Project**

## Project Description

The Maine Trail is a small interactive PHP survival game inspired by the classic
choose-your-own-adventure game, The Oregon Trail. The player is traveling north through Maine
to reach a cabin before the first major snowstorm of the season.

Throughout the game, the player makes decisions about how to continue the
journey. Different choices affect progress, gas, morale, and the approaching
storm. Some choices are safer, while others involve taking a risk.

The goal is to reach Mabel's cabin before running out of gas, losing all
morale, or being caught by the storm.

## How to Run

The project is a PHP web application.

From the project directory, start the PHP development server:

    php -S localhost:8080 -t public

Then open the provided local URL in a web browser.

The main landing page is:

    public/index.php

No database or additional setup is required.

## Project Structure

- `public/index.php` - Main landing page
- `public/intro.php` - Game instructions and introduction
- `public/game.php` - Main game logic and gameplay
- `public/functions.php` - Reusable PHP functions
- `public/header.php` - Shared page header
- `public/footer.php` - Shared page footer
- `public/style.css` - Game styling
- `public/script.js` - Client-side game effects
- `public/images/` - Game images and GIFs
- `public/game_log.txt` - Persistent game activity log

## PHP Concepts Demonstrated

This project uses concepts covered throughout CIS333, including:

### PHP Code and Variables

PHP is used throughout the application to manage game state, calculate
outcomes, and generate the HTML displayed to the player.

### Functions

The project includes reusable functions in `functions.php`.

- `clampStat()` keeps game statistics between 0 and 100.
- `writeGameLog()` writes game activity to a text file.

### Sessions and Variables

PHP sessions are used to keep track of the player's current game state between
page requests. The game stores values such as:

- Progress
- Gas
- Morale
- Storm progress
- Current event
- Game status
- Current message

### Control Structures

The game uses conditional statements extensively to determine what happens
after each player choice.

Examples include:

- `if` statements
- Nested conditional logic
- Win and loss conditions
- Random outcomes for risky choices

A `foreach` loop is also used to determine the storm weather display from an
associative array.

### Arrays

An associative array stores the different storm levels and their corresponding
weather indicators.

For example:

- 0% - Sunny
- 20% - Partly cloudy
- 40% - Snow
- 60% - More severe snow
- 80% - Freezing
- 100% - Storm

### Forms and User Input

The game uses HTML forms and PHP `$_POST` data to handle player choices.

The player can choose actions such as:

- Travel
- Rest
- Take a risk
- Continue to the next event
- Reset the game

These choices are processed by PHP and change the current game state.

### File Handling

The game writes a persistent text log using PHP's `file_put_contents()`
function.

The file records when a new game is started and demonstrates writing data to
a file that persists between requests.

## Game Features

The game includes:

- Seven events
- Multiple player choices
- Random outcomes for risky choices
- Progress tracking
- Gas tracking
- Morale tracking
- Storm progression
- Win and loss conditions
- Reset functionality
- Animated GIFs for events and outcomes
- Custom CSS styling
- Persistent game logging

## Design

The project was designed to have a cozy, slightly weird Maine road-trip
feel while still functioning as a small PHP game.

The interface uses a HUD to make the player's current progress, gas, morale,
and storm conditions easy to understand while playing.

## Requirements Demonstrated

The project demonstrates the following core project requirements:

- Multiple pages and game states
- User input through HTML forms and PHP `$_POST`
- Conditional and looping structures
- User-defined PHP functions
- PHP arrays
- File handling
- PHP-generated HTML output
- CSS and multimedia assets

## AI Use

AI tools, such as Github Copilot, were used to help troubleshoot code errors. 

The final project, game design, writing, choices, story, visual design, and
implementation decisions were created and reviewed by Kaitlyn Walsh.