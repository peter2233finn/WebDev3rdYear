#sudo apt-get install apache2 mysql 

yes|rm -r ~/WebDevProject
mkdir ~/WebDevProject
echo "Making project dictionary"
git init  ~/WebDevProject/

cd ~/WebDevProject

git remote add origin git@github.com:peter2233finn/WebDev3rdYear.git
echo "Adding git repositery..."
sleep 1
echo "creating script to send stuff to repository"
echo "echo \"enter short description of work done\"
read message
git add *
git commit -m "\$message"
git push -u origin master" > ~/WebDevProject/send_to_github.sh

echo "cd ~/WebDevProject
git clone https://github.com/peter2233finn/WebDev3rdYear.git
mv yes|WebDevProject/* .
rm -r WebDevProject" > ~/WebDevProject/download-from-github.sh



echo "making 2 scripts executible..."
chmod 777 send_to_github.sh download-from-github.sh


