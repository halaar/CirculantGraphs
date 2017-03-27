<head>
  <link type='text/css' rel='stylesheet' href='Circulants.css'/>
  <title>CirculantGraphs</title>
</head>
<ul class="topbar">
  <li class="topbar"><a href="JJANhomepage.php">Home</a></li>
  <li class="topbar"><a href="JJANCirc.php">Circulant Graphs</a></li>
  <li class="topbar"><a href="JJANCirc13.php">Sandpile Groups of Cn(1,3)</a></li>
</ul>
<div id="page-wrap2">
<b>

Circulant Graphs: 	
</b>  <br> <br>
Circulant graphs are a beautiful family of graphs which exhibit many symmetries. <br><br>
A circulant graph can be defined as follows: Let <i>n</i> be a positive integer and
{a<sub>1</sub> , a<sub>2</sub>, . . . a<sub>m</sub>} be a set of <i> m </i> integers
such that for each <i>j</i>, 1 &le; a<sub>j</sub> &le; n and <i>gcd</i>(n, a<sub> 1</sub>,a<sub>2</sub>, . . . a<sub>m</sub>) = 1.

The <b>circulant graph</b> C<sub>n</sub>(a<sub>1</sub> , a<sub>2</sub>, . . . a<sub>m</sub>) is the graph with vertex
set {v<sub>0</sub> , v<sub>1</sub>, . . ., v<sub>n-1</sub>} and edges connecting vertex v<sub>i</sub> to each vertex
v<sub>i + a<sub>j</sub></sub>, where addition is taken modulo <i>n</i>. The <i>gcd</i> condition is to ensure the graph
is connected.  <br>

Circulant graphs get their name by the fact their adjacency matrix is a circulant matrix. 
That means, the adjacency matrix can be written as follows,<br><br>
<div align=center>
<table class="matrix">
<tr>
<td>c<sub>0</sub></td><td>c<sub>1</sub></td><td>c<sub>2</sub></td><td>&#8230;</td><td>c<sub>n-2</sub></td><td>c<sub>n-1</sub></td>
</tr>
<tr>
<td>c<sub>n-1</sub></td><td>c<sub>0</sub></td><td>c<sub>1</sub></td><td>&#8230;</td><td>c<sub>n-3</sub></td><td>c<sub>n-2</sub></td>
</tr>
<tr>
<td>c<sub>n-2</sub></td><td>c<sub>n-1</sub></td><td>c<sub>0</sub></td><td>&#8230;</td><td>c<sub>n-4</sub></td><td>c<sub>n-3</sub></td>
</tr>
<tr>
<td>&#8942;</td><td>&#8942;</td><td>&#8945;</td><td>&#8945;</td><td>&#8942;</td><td>&#8942;</td>
</tr>
<tr>
<td>c<sub>1</sub></td><td>c<sub>2</sub></td><td>c<sub>3</sub></td><td>&#8230;</td><td>c<sub>n-1</sub></td><td>c<sub>0</sub></td>
</tr>
</table>
</div>
<br><br> 
where the a<sub>ij</sub> entry represents the number of edges from vertex v<sub>i</sub> to v<sub>j</sub> <br><br>
<b>Previous Work</b>: <br> <br> Little is known about the Sandpilegroups of circulant graphs in general,
but the results that have been made are intriguing and significant. <br> <br>

In 1986,  Boesch and Prodinger proved that the order of the Sandpile group is <br> <br>
<center>&#124;S(C<sub>n</sub>(1,2))&#124;=n&middot;F<sub>n</sub><sup>2</sup> </center> <br>
where F<sub>n</sub> is the n<sup>th</sup> Fibonacci number.<br><br>
Similarly in 1996 Yong and Acenjian showed that the order of C<sub>n</sub>(1,3) is
<br> <br> 
<center>&#124;S(C<sub>n</sub>(1,3))&#124; = n&middot;(a<sub>n-2</sub>)<sup>2</sup>, where </center> <br>
<center> a<sub>n</sub> = <span style="white-space:nowrap;font-size:larger;">&radic;<span style="text-decoration:overline;">&nbsp;2&nbsp;</span></span>(a<sub>n-1</sub> + a<sub>n-3</sub>) – a<sub>n-4</sub>,</center> <br>
<center>a<sub>1</sub>=1,&nbsp;&nbsp;&nbsp;&nbsp;a<sub>2</sub>=2<span style="white-space:nowrap;font-size:larger;">&radic;<span style="text-decoration:overline;">&nbsp;2&nbsp;</span></span>,&nbsp;&nbsp;&nbsp;&nbsp;</hspace{.1cm}> a<sub>3</sub>=5,&nbsp;&nbsp;&nbsp;&nbsp;</hspace{.1cm}> a<sub>4</sub>=5<span style="white-space:nowrap;font-size:larger;">&radic;<span style="text-decoration:overline;">&nbsp;2&nbsp;</span></span></center> <br>


More generally, it is known that the number of spanning trees in a circulant graph
 is given by a recursive formula. This was shown by Zhang, Yong, and Golin in 1999.
  Since the order of the Sandpile group is equal to the number of spanning trees in
   the graph, the group order can also be determined by a recursive formula. It is 
   curious then to consider how this number decomposes in the expression of the 
   invariant factors determine the group itself. <br> <br>

   In 2006, Hou, Woo, and Chen showed that, in a certain case, the Sandpile groups are
   related to Fibonacci numbers. They proved, <br> <br>
	<center> S(C<sub>n</sub>(1,2)) &#8773; &#8484; <sub><i>gcd</i>(n,F<sub>n</sub>)</sub> 
	&#8853; &#8484; <sub>F<sub>n</sub></sub> &#8853; &#8484; <sub><sup>n&middot;
	F<sub>n<sup> </sup> / <sub><i>gcd</i>(n,F<sub>n</sub>)</sub></sub> </sup> </sub> </center>
<br>
	where F<sub>n</sub> is the recursive Fibonacci sequence defined with F<sub>0</sub>=1 and F<sub>1</sub>=1. <br> <br>

	<b> Our Goal: </b> <br> <br> We hope to determine how the structure of the circulant graph 
	and recursive nature of the order of the Sandpile group appears in the Sandpile group itself.
	 With preliminary computation we have seen that invariant factors determine the Sandpile group 
	 is not always a clear or straightforward decomposition of the group order. For example, the 
	 Sandpile group of C<sub>21</sub>(1,3) is
<br>  <br>
	 <center>S(C<sub>21</sub>(1,3)) &#8773; &#8484;<sub>41</sub> &#8853; &#8484;<sub>41</sub> &#8853;
	  &#8484;<sub>41 &#215; 13</sub> &#8853; &#8484;<sub>41&#215;13&#215;21</sub>.</center>
<br> 
	While the Sandpile group of C<sub>9</sub>(1,3) is 
	<br> <br>
	<center> S(C<sub>9</sub>(1,3)) &#8773; &#8484;<sub>37</sub> &#8853; &#8484;<sub>9 &#215; 37</sub> =
	 &#8484;<sup>2</sup><sub>37</sub> &#8853; &#8484;<sub>9</sub>.</center>
	 <br>

	In the first example, the invariant factors are not relatively prime so we can not rearrange
	 to get a form similar to that of S(C<sub>n</sub>(1,2)) as seen in the second example. Unfortunately 
	 we have been unable to find an explicit formula for the sandpile group of C<sub>n</sub>(1,3). 
	 In an effort to do so we have created a database of circulant graphs and their sandpile groups
	  in an effort to better understand the sandpile groups of S(C<sub>n</sub>(1,3)) and even more
	   generally S(C<sub>n</sub>(a<sub>1</sub>,...,a<sub>n</sub>)). We hope our database is useful
	    in studying the family of circulant graphs in general.

</div>





