# Community College Course Finder
## Developer Manual

### File Structure

![File Structure](/src/images/developer_manual/file_structure.png)

This is the file structure for the project as it is now. The "docs" folder
contains the user and developer manuals. The main code for the app is located
within the "src" folder, which contains the "images", "php", and "css" folder.
The "images" folder contains all of the images used are every file. The HTML and
CSS for the landing page is contained in the "index.php" file and the "css"
folder. The "php" folder handles the search function and produces the results page.

### Manuals

If you make any changes to the project, check to make sure that the information
in the developer and user manuals are still correct. If they are not correct
then make the appropriate changes to make them correct.

### Images

If you add any images to the project put them into the "images" folder and make
sure that they put into the appropriate sub-folder.  

###  HTML/CSS

If you want to add more filters or change the options for the current filters.
You have to edit the "index.php" file in the root. We use Bootstrap CSS to style
the webpage. There is some CSS done in the "default.css" file inside the "css"
folder. However we do use some of the div classes that is provided with
Bootstrap in the "index.php" file, that is mainly done in-line.

If you wish to make changes to the results page then you have to edit the
"results.css" file located in the "css" folder and the "results.php" file in the
"php" folder. The "results.php" file contains the code the structures how the
results will appear in a table format with the columns "ID", "Title", "College",
"Term", "Start Term", "End Term", "UMD Equivalent", and "Credits". The
"results.css" file is the stylesheet that determines how the table and webpage
will look.

### Database

We use SQLite and JQuery to create, maintain, and query the database. If you add
anything to the database please be sure to update the "schedule.sqlite" file in
the "php" folder. If you do add another filter be sure to update the
"SQL_query.php" file to reflect the changes you have made so that the search
function still works as designed.
