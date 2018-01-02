@echo off
echo Enter how many photos
set /p n=
for /l %%i in (1, 1, %n%) do (
copy "chat.jpg" "photos\chat"%%i%".jpg"
)
echo Work done!
pause > nul