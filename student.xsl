<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" encoding="UTF-8"/>
    
    <xsl:template match="/">
        <html>
        <head>
            <title>Student Results</title>
            <link rel="stylesheet" type="text/css" href="student.css"/>
        </head>
        <body>
            <h2>Student Application Result</h2>
            <table border="1">
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Score</th>
                    <th>Status</th>
                </tr>
                <xsl:for-each select="students/student">
                    <tr>
                        <td><xsl:value-of select="name"/></td>
                        <td><xsl:value-of select="age"/></td>
                        <td><xsl:value-of select="score"/></td>
                        <td>
                            <xsl:choose>
                                <xsl:when test="score >= 50">
                                    <span class="pass">Pass</span>
                                </xsl:when>
                                <xsl:otherwise>
                                    <span class="fail">Fail</span>
                                </xsl:otherwise>
                            </xsl:choose>
                        </td>
                    </tr>
                </xsl:for-each>
            </table>
        </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
