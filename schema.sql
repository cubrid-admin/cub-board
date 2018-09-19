Create table cub_user (
	user_id			integer not null primary key,
	password		varchar(12),
	name			  varchar(32),
	status			char(1),
	created			datetime,
	updated			datetime
);

Create table cub_board_t (
	num				  integer not null primary key,
	user_id			integer not null,
	name			  varchar(32) not null,
	title			  varchar(256),
  board_type	char(1),
	status			char(1),
	created			datetime,
	updated			datetime
);

Create table cub_board (
	num				integer not null primary key,
	name			varchar(32) not null,
	status		char(1) not null,
	title			varchar(256) not null,
	contents	varchar(65535),
	created		datetime,
	updated		datetime
);
