<p align="center"><img src="https://mlkl1s6ftxfa.i.optimole.com/w:150/h:38/q:auto/https://webuffsolutions.com/wp-content/themes/webuff-solutions/assets/img/webuff_logo.png"></p>

## Instructions

- Clone this project by using the command : "git clone https://github.com/webuffsolutions/fnb.git fnb"
- Navigate through the project directory : "cd project"
- composer update/install
- create a new file and name it as ".env"
- copy the contents of ".env.example"
- alias pa="php artisan"
- generate a new application key : pa key:generate
- pa config:clear
- fill-in your database credentials
- pa migrate --seed
