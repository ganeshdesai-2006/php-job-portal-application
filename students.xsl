<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/xsl/Transform">

<xsl:template match="/students">
<html>
<body>
<h2>Student List</h2>
<table border="1" cellpadding="5">
<tr>
<th>Name</th>
<th>Roll No</th>
<th>Department</th>
<th>Year</th>
</tr>
<xsl:for-each select="student">
<tr>
<td><xsl:value-of select="name"/></td>
<td><xsl:value-of select="rollno"/></td>
<td><xsl:value-of select="department"/></td>
<td><xsl:value-of select="year"/></td>
</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>