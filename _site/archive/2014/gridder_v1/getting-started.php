<?php include("parts/header.php"); ?>

   <section id="getting-started">

      <div class="row">
         <div class="medium-12">
            <h1>Getting Started</h1><hr>
         </div>
      </div>

      <div class="row">
         <div class="medium-12">

            <div class="getting-started-item">
               <h2>1. Download Gridder</h2>
               <p>
                  Start out by <a href="downloads.php">downloading a copy of gridder</a>, or alternatively use our CDN. Simply copy and paste the following code in your page's <code>&lt;head&gt;</code> section.
                  This will give you full access to the entire Gridder library.
               </p>
               <pre class="prettyprint lang-css">&lt;link rel="stylesheet" href="https://cdn.rawgit.com/triss90405/gridder/master/gridder.min.css"&gt;</pre>
            </div>

            <div class="getting-started-item">
               <h2>2. Add viewport tag</h2>
               <p>
                  Now, add the Viewport Meta Tag. This lets you control the width and scale of the viewport on mobile browsers, by setting the width equl to the devices native width.<br>
                  Add the following code to your page's <code>&lt;head&gt;</code> section and you're good to go!
               </p>
               <pre class="prettyprint">&lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;</pre>
            </div>

            <div class="getting-started-item">
               <h2>3. Understanding the grid</h2>
               <p>Gridder is a CSS grid devided into 12 columns. The grid automatically scales to fit any and every device. Gridder is built with a mobile-first approach, thus it uses media-queries such as the following code example to target columns based on their minimum width.</p>
               <pre class="prettyprint lang-css">@media (min-width: 768px) { width: 750px; }</pre>
               <h3>Using the grid</h3>
               <p>Start by wrapping your page's content in a <code>.container</code> class like this</p>

<pre class="prettyprint">&lt;div class="container"&gt;

   /* Page Content */

&lt;/div&gt;</pre>

               <p>Next up, we initiate a new row by adding the <code>.row</code> class to an element like this:</p>
<pre class="prettyprint">&lt;div class="container"&gt;
   &lt;div class="row"&gt;

      /* Columns */

   &lt;/div&gt;
&lt;/div&gt;</pre>

               <p>Lastly we need to add the columns we need. This is done by adding one or more of the following classes to an element: <code>.tiny-*</code>, <code>.small-*</code>, <code>.medium-*</code>, <code>.large-*</code>. The * represents a number ranging from 1-12. Each defining the width of the column.</p>
               <p>For example, applying the class <code>.medium-6</code> will create a column that takes up 50% of the width of its container (6/12 = 50%).</p>
               <p>Here's a simple example grid</p>
<pre class="prettyprint">&lt;div class="container"&gt;
   &lt;div class="row"&gt;
      &lt;div class="medium-4"&gt;&lt;/div&gt;
      &lt;div class="medium-3"&gt;&lt;/div&gt;
      &lt;div class="medium-3"&gt;&lt;/div&gt;
      &lt;div class="medium-2"&gt;&lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;</pre>

               <p>This will produce a grid that looks like this:</p>

               <div class="row">
                  <div class="medium-4"><div class="column-display-1">medium-4</div></div>
                  <div class="medium-3"><div class="column-display-1">medium-3</div></div>
                  <div class="medium-3"><div class="column-display-1">medium-3</div></div>
                  <div class="medium-2"><div class="column-display-1">medium-2</div></div>
               </div>

               <h3>Overview</h3>
               <p>For a better overview, please refer to the following table which explains the grid in more detail.</p>
                  <table>
                     <thead>
                        <tr>
                           <th>Name</th>
                           <th>Breakpoint</th>
                           <th>Device</th>
                           <th>Class</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th>tiny</th>
                           <td>&lt; 768px</td>
                           <td>Smartphones</td>
                           <td>.tiny-*</td>
                        </tr>
                        <tr>
                           <th>small</th>
                           <td>&ge; 768px</td>
                           <td>Tablets</td>
                           <td>.small-*</td>
                        </tr>
                        <tr>
                           <th>medium</th>
                           <td>&ge; 992px</td>
                           <td>Medium Desktops</td>
                           <td>.medium-*</td>
                        </tr>
                        <tr>
                           <th>large</th>
                           <td>&ge; 1200px</td>
                           <td>Large Desktops</td>
                           <td>.large-*</td>
                        </tr>
                     <tbody>
                  </table>

            </div>

         </div>
      </div>

   </section>

<?php include("parts/footer.php"); ?>
