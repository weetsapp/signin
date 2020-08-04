create table `signin` (

`signID` int(30) auto_increment,
`firstname` text not null,
`surname` text not null,
`country` text not null,
`dateb` text not null,
`monthb` text not null,
`yearb` text not null,
`username` text not null,
`pasword` text not null,
`acctype` text not null,
primary key(`signID`)
)
engine=myisam character set utf8 collate=utf8_general_ci;