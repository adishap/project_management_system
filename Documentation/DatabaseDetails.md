# Database Details:

***project_aspirants***
	*team_id	(varchar,20)
	*project_title	(varchar,100)
	*abstract	(varchar,500)
	*password	(varchar,35)

***peers***
	*name	(varchar,25)
	*roll_no 	(varchar,20)
	*website_link	(varchar,150)
	*password	(varchar,35)

***requested_peers***
	*team_id	(varchar,20)
	*peer_roll_no	(varchar,20)

***allocated_teams***
	*peer_roll_no	(varchar,20)	
	*aspirant_id1	(varchar,20)
	*aspirant_id2	(varchar,20)
	*aspirant_id3	(varchar,20)