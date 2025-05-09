<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    
    <!-- Output method is HTML -->
    <xsl:output method="html" indent="yes"/>
    
    <!-- Template to match the root of the document -->
    <xsl:template match="/students">
        <html>
            <head>
                <title>Student Information</title>
                <style>
                    /* Styling for the table and page */
                    body {
                        font-family: Arial, sans-serif;
                        margin: 0;
                        padding: 0;
                        background-color: #f4f4f4;
                        color: #333;
                    }
                    
                    h1 {
                        text-align: center;
                        background-color: #3498db;
                        color: white;
                        padding: 20px;
                        margin-bottom: 20px;
                    }
                    
                    table {
                        width: 80%;
                        margin: 0 auto;
                        border-collapse: collapse;
                        background-color: white;
                        border-radius: 8px;
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    }

                    th {
                        background-color: #2c3e50;
                        color: white;
                        padding: 12px;
                        text-align: left;
                    }

                    td {
                        padding: 12px;
                        border-bottom: 1px solid #ddd;
                    }

                    tr:nth-child(even) {
                        background-color: #ecf0f1;
                    }

                    ul {
                        padding: 0;
                        list-style-type: none;
                    }

                    ul li {
                        margin-bottom: 5px;
                    }

                    tr:hover {
                        background-color: #bdc3c7;
                    }
                </style>
            </head>
            <body>
                <h1>Student Information</h1>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Grade</th>
                            <th>Courses</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop through each student and create a table row -->
                        <xsl:for-each select="student">
                            <tr>
                                <td><xsl:value-of select="id"/></td>
                                <td><xsl:value-of select="name"/></td>
                                <td><xsl:value-of select="age"/></td>
                                <td><xsl:value-of select="grade"/></td>
                                <td>
                                    <ul>
                                        <xsl:for-each select="courses/course">
                                            <li><xsl:value-of select="."/></li>
                                        </xsl:for-each>
                                    </ul>
                                </td>
                            </tr>
                        </xsl:for-each>
                    </tbody>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
