# FUELPHP DEVELOPMENT LOGS

# Database
- Generate
```
# 01 users
php oil g scaffold create_users username:string[200] password:string[255] group:integer[11] email:string[255] last_login:string[25] login_hash:string[255] profile_fields:text name:text created_at:integer[11] updated_at:integer[11] deleted_at:integer[11]
```
