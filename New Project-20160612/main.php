<HTML>
<HEAD>
<TITLE>File Upload Test</TITLE>
</HEAD>
<BODY>
<H1 ALIGN="CENTER">File Upload System</H1>
<HR>
<FORM ACTION="http://www.aee.odu.edu/cgi-bin/uploadFile.pl" METHOD=POST ENCTYPE="mutipart/form-data">
<B>File Description:</B><BR>
<INPUT TYPE="TEXT" NAME="Description" SIZE=50 MAXLENGTH=100><BR>
<B>Specify File to Post:</B><BR>
<INPUT TYPE="FILE" NAME="FileName">
<BR><BR>
<HR>
<DIV ALIGN="CENTER">
<INPUT TYPE="SUBMIT" NAME="Submit" Value="Send it">
</DIV>
</FORM>
</BODY>
</HTML>
