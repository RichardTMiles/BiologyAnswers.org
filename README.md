# Dependencies

To Stand Up locally you'll need `PHP ^7.2`, `Node v10.8.0`, `git 2.13.5`, `MySQL Ver 14.14 Distrib 5.7.19`, and the latest version of `Composer` installed Globally. The above requirements are just what I currently have installed. I'm sure most version of Node and MySQL will work. PHP definitely need 7.1 and up. Please drop a pull request if I missed any ;)

It is worth noting that all of these programs listed are written for Mac and Windows; moreover, you can run this repository on Windows (instructions coming soonish)! 

You can check to see what versions you have installed by typing the folling into your terminal 

>> php -v
>> node -v
>> mysql --version
>> git --version

# N00BS

I originally developed this website when I was 15, a freshman in highschool. At the time you couldn't send large files over text message or email, so to share my solutions to class members I had to create a website. I had a iBook G4 which came installed with iWeb, a super shitty website builder like wiks or something. It was discontinued. Since then, I decided to go to school for computer science. It is the most challenging and rewarding expecence I have ever undertaken and would reccommend it to anyone! I have yet to have kids or be married... But the bars been set high :P

If you find yourself scratching your head when reading these instructions feel free to DM me. They are written at a higher level to encourage the spirit of exploration and Google Fu. Knowlage is the only true source of power && Unless it sucks, don't reinvent the wheel. 

# Mac Instructions

1) Make sure your mac is completely upto date from the app store.

2) Open the program "Terminal", which is pre-installed on your computer.

3) Ensure you have the required dependenncies listed above.

4) Using the following command, download this souce repositories code in terminal.

>> git clone https://github.com/RichardTMiles/BiologyAnswers.org.git

5) Change directories to move into the BiologyAnswers.org folder just downloaded.

>> cd BiologyAnswers.org

6) Run the following to automatically download the rest of the code dependencies. 

>> composer install
>> npm install

7) You will need to edit the "/Application/Config/Config.php" for you MySQL database credentials. The scheme can be left set to 'BiologyAnswers', as it will be created and populated for you if not existing. This is all managed with CarbonPHP, a php framework I built for hella speed, installed with composer. 
        
        >> 'DB_USER' => 'root',                
        >> 'DB_PASS' => ''
      
8) Using PHP's built in server, we can now run our application!

>> php -S localhost:1777 index.php

9) Goto http://localhost:1777/ in your browser to see the gold.

10) Start this repo!


# Check Out My Other Projects 

Build full scale MVC applications quickly!
Visit carbonphp.com for suprime documentation.
