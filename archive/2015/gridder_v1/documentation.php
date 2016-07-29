<?php include("parts/header.php"); ?>

   <section id="documentation">

      <div class="row">
         <div class="medium-12">
            <h1>Documentation</h1><hr>
         </div>
      </div>

      <!-- Basic Grid -->
      <div class="document-item">


         <div class="row">
            <div class="small-12">
               <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                  <li><a href="#tab1" class="active">Basic Grid</a></li>
                  <li><a href="#tab2">Offset Columns</a></li>
                  <li><a href="#tab3">Nesting Grid</a></li>
               </ul>
               <section id="first-tab-group" class="tabgroup">
                  <div id="tab1">
                     <h2>Basic Grid</h2>
                     <p>Gridder is a 12-column-grid with a max width of 1200px.
                        Gridder is built mobile first, and will adapt to all screen sizes and devices.</p>
                     <div class="row">
                        <div class="small-1"><div class="column-display-1">small-1</div></div>
                        <div class="small-11"><div class="column-display-1">small-11</div></div>
                     </div>
                     <div class="row">
                        <div class="small-2"><div class="column-display-1">small-2</div></div>
                        <div class="small-10"><div class="column-display-1">small-10</div></div>
                     </div>
                     <div class="row">
                        <div class="small-3"><div class="column-display-1">small-3</div></div>
                        <div class="small-9"><div class="column-display-1">small-9</div></div>
                     </div>
                     <div class="row">
                        <div class="small-4"><div class="column-display-1">small-4</div></div>
                        <div class="small-8"><div class="column-display-1">small-8</div></div>
                     </div>
                     <div class="row">
                        <div class="small-5"><div class="column-display-1">small-5</div></div>
                        <div class="small-7"><div class="column-display-1">small-7</div></div>
                     </div>
                     <div class="row">
                        <div class="small-6"><div class="column-display-1">small-6</div></div>
                        <div class="small-6"><div class="column-display-1">small-6</div></div>
                     </div>
                     <div class="row">
                        <div class="small-7"><div class="column-display-1">small-7</div></div>
                        <div class="small-5"><div class="column-display-1">small-5</div></div>
                     </div>
                     <div class="row">
                        <div class="small-8"><div class="column-display-1">small-8</div></div>
                        <div class="small-4"><div class="column-display-1">small-4</div></div>
                     </div>
                     <div class="row">
                        <div class="small-9"><div class="column-display-1">small-9</div></div>
                        <div class="small-3"><div class="column-display-1">small-3</div></div>
                     </div>
                     <div class="row">
                        <div class="small-10"><div class="column-display-1">small-10</div></div>
                        <div class="small-2"><div class="column-display-1">small-2</div></div>
                     </div>
                     <div class="row">
                        <div class="small-11"><div class="column-display-1">small-11</div></div>
                        <div class="small-1"><div class="column-display-1">small-1</div></div>
                     </div>
                     <div class="row">
                        <div class="small-12"><div class="column-display-1">small-12</div></div>
                     </div>

                     <p>Using Gridder is easy. Start by wrapping your content in a <code>.container</code> class. This will limit the content width to 1200px and allow for a smooth responisve experience.</p>
                     <p>You'll want to wrap each of your rows in a <code>.row</code> to make sure rows are cleared properly.
                     <br>You can then add one or more of the following classes to your columns: <code>.tiny-*</code>, <code>.small-*</code>, <code>.medium-*</code>, <code>.large-*</code>.
                     <br>See the <a href="getting-started.php">Getting Started</a> section for more details on setting up your grid.</p>

                     <h3>Example Code</h3>
<pre class="prettyprint">&lt;div class="container"&gt;
   &lt;div class="row"&gt;
      &lt;div class="medium-4"&gt; 4 / 12 column &lt;/div&gt;
      &lt;div class="medium-3"&gt; 3 / 12 column &lt;/div&gt;
      &lt;div class="medium-3"&gt; 3 / 12 column &lt;/div&gt;
      &lt;div class="medium-2"&gt; 2 / 12 column &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;</pre>

                  </div>
                  <div id="tab2">
                     <!-- Offset Columns -->
                     <h2>Offset Columns</h2>
                     <p>You can offset columns to align grid-items to yor exact needs. simply add a <code>.medium-offset-*</code> class to your column. The * represents the number of columns you want you want ot offset the column in question. medium can obviously be replaced with one of the others (tiny, small, large) to match your breakpoints.</p>
                     <div class="row">
                        <div class="small-1">
                           <div class="column-display-1">small-1</div>
                        </div>
                        <div class="small-4 small-offset-3">
                           <div class="column-display-1">small-4 small-offset-3</div>
                        </div>
                        <div class="small-3 small-offset-1">
                           <div class="column-display-1">small-3 small-offset-1</div>
                        </div>
                     </div>
                     <h3>Example Code</h3>
<pre class="prettyprint">&lt;div class="container"&gt;
   &lt;div class="row"&gt;
      &lt;div class="small-1"&gt; 1 / 12 column &lt;/div&gt;
      &lt;div class="small-4 small-offset-3"&gt; 4 / 12 column - 3 / 12 offset &lt;/div&gt;
      &lt;div class="small-3 small-offset-1"&gt; 3 / 12 column - 1 / 12 offset &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;</pre>
                  </div>
                  <div id="tab3">
                     <!-- Nesting Grid -->
                     <h2>Nesting Grids</h2>
                     <p>Grids can be nested inside eachother. Simply create a new <code>.row</code> inside a column.</p>

                     <div class="row">
                        <div class="small-6">
                           <div class="column-display-1">
                              small-6
                              <div class="row">
                                 <div class="tiny-6"><div class="column-display-2">tiny-6</div></div>
                                 <div class="tiny-6"><div class="column-display-2">tiny-6</div></div>
                              </div>
                           </div>
                        </div>
                        <div class="small-6">
                           <div class="column-display-1">
                              small-6
                              <div class="row">
                                 <div class="tiny-4"><div class="column-display-2">tiny-4</div></div>
                                 <div class="tiny-4"><div class="column-display-2">tiny-4</div></div>
                                 <div class="tiny-4"><div class="column-display-2">tiny-4</div></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <h3>Example code</h3>
<pre class="prettyprint">&lt;div class="container"&gt;
   &lt;div class="row"&gt;
      &lt;div class="small-6"&gt;
         &lt;div class="row"&gt;
            &lt;div class="tiny-6"&gt;tiny-6&lt;/div&gt;
            &lt;div class="tiny-6"&gt;tiny-6&lt;/div&gt;
         &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class="small-6"&gt;
         &lt;div class="row"&gt;
            &lt;div class="tiny-4"&gt;tiny-4&lt;/div&gt;
            &lt;div class="tiny-4"&gt;tiny-4&lt;/div&gt;
            &lt;div class="tiny-4"&gt;tiny-4&lt;/div&gt;
         &lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;
</pre>
                  </div>
               </section>
            </div>
         </div>
      </div>
   </section>

<?php include("parts/footer.php"); ?>
