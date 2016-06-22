<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        @include('includes.docs.api.head')
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-3" id="sidebar">
                    <div class="column-content">
                        <div class="search-header">
                            <img src="/assets/docs/api/img/f2m2_logo.svg" class="logo" alt="Logo" />
                            <input id="search" type="text" placeholder="Search">
                        </div>
                        <ul id="navigation">

                            <li><a href="#introduction">Introduction</a></li>

                            

                            <li>
                                <a href="#User">User</a>
                                <ul>
									<li><a href="#User_index">index</a></li>

									<li><a href="#User_mostActive">mostActive</a></li>

									<li><a href="#User_show">show</a></li>

									<li><a href="#User_withComments">withComments</a></li>

									<li><a href="#User_store">store</a></li>

									<li><a href="#User_update">update</a></li>

									<li><a href="#User_delete">delete</a></li>
</ul>
                            </li>


                            <li>
                                <a href="#Ingredient">Ingredient</a>
                                <ul>
									<li><a href="#Ingredient_index">index</a></li>

									<li><a href="#Ingredient_show">show</a></li>

									<li><a href="#Ingredient_withRecipes">withRecipes</a></li>

									<li><a href="#Ingredient_store">store</a></li>

									<li><a href="#Ingredient_update">update</a></li>

									<li><a href="#Ingredient_delete">delete</a></li>
</ul>
                            </li>


                            <li>
                                <a href="#Recipe">Recipe</a>
                                <ul>
									<li><a href="#Recipe_index">index</a></li>

									<li><a href="#Recipe_randomDailyMenu">randomDailyMenu</a></li>

									<li><a href="#Recipe_query">query</a></li>

									<li><a href="#Recipe_topRated">topRated</a></li>

									<li><a href="#Recipe_mostCommented">mostCommented</a></li>

									<li><a href="#Recipe_show">show</a></li>

									<li><a href="#Recipe_store">store</a></li>

									<li><a href="#Recipe_update">update</a></li>

									<li><a href="#Recipe_delete">delete</a></li>
</ul>
                            </li>


                            <li>
                                <a href="#Comment">Comment</a>
                                <ul>
									<li><a href="#Comment_index">index</a></li>

									<li><a href="#Comment_recent">recent</a></li>

									<li><a href="#Comment_show">show</a></li>

									<li><a href="#Comment_store">store</a></li>

									<li><a href="#Comment_update">update</a></li>

									<li><a href="#Comment_delete">delete</a></li>
</ul>
                            </li>


                        </ul>
                    </div>
                </div>
                <div class="col-9" id="main-content">

                    <div class="column-content">

                        @include('includes.docs.api.introduction')

                        <hr />

                                                

                                                <a href="#" class="waypoint" name="User"></a>
                        <h2>User</h2>
                        <p></p>

                        
                        <a href="#" class="waypoint" name="User_index"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>GET</h2></li>
                            <li><h3>index</h3></li>
                            <li>api/user</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Display the Users resource.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">GET /user</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/user" type="GET">
                          <div class="endpoint-paramenters">
                            
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="GET"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="User_mostActive"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>GET</h2></li>
                            <li><h3>mostActive</h3></li>
                            <li>api/user/most-active/{limit}</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Display the most Active ( with highest number of comments ) Users resource.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">GET /user/most-active/{limit}</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/user/most-active/{limit}" type="GET">
                          <div class="endpoint-paramenters">
                            <h4>Parameters</h4>
                            <ul>
                              <li class="parameter-header">
                                <div class="parameter-name">PARAMETER</div>
                                <div class="parameter-type">TYPE</div>
                                <div class="parameter-desc">DESCRIPTION</div>
                                <div class="parameter-value">VALUE</div>
                              </li>
                                                           <li>
                                <div class="parameter-name">limit</div>
                                <div class="parameter-type">int</div>
                                <div class="parameter-desc">Limit of results number</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="limit">
                                </div>
                              </li>

                            </ul>
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="GET"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="User_show"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>GET</h2></li>
                            <li><h3>show</h3></li>
                            <li>api/user/{id}</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Display the specified User resource.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">GET /user/{id}</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/user/{id}" type="GET">
                          <div class="endpoint-paramenters">
                            <h4>Parameters</h4>
                            <ul>
                              <li class="parameter-header">
                                <div class="parameter-name">PARAMETER</div>
                                <div class="parameter-type">TYPE</div>
                                <div class="parameter-desc">DESCRIPTION</div>
                                <div class="parameter-value">VALUE</div>
                              </li>
                                                           <li>
                                <div class="parameter-name">id</div>
                                <div class="parameter-type">int</div>
                                <div class="parameter-desc">The id of a User</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="id">
                                </div>
                              </li>

                            </ul>
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="GET"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="User_withComments"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>GET</h2></li>
                            <li><h3>withComments</h3></li>
                            <li>api/user/{id}/comments</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Display the specified User resource.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">GET /user/{id}/comments</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/user/{id}/comments" type="GET">
                          <div class="endpoint-paramenters">
                            <h4>Parameters</h4>
                            <ul>
                              <li class="parameter-header">
                                <div class="parameter-name">PARAMETER</div>
                                <div class="parameter-type">TYPE</div>
                                <div class="parameter-desc">DESCRIPTION</div>
                                <div class="parameter-value">VALUE</div>
                              </li>
                                                           <li>
                                <div class="parameter-name">id</div>
                                <div class="parameter-type">int</div>
                                <div class="parameter-desc">The id of a User</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="id">
                                </div>
                              </li>

                            </ul>
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="GET"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="User_store"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>POST</h2></li>
                            <li><h3>store</h3></li>
                            <li>api/user</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Create the specified User resource.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">POST /user</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/user" type="POST">
                          <div class="endpoint-paramenters">
                            <h4>Parameters</h4>
                            <ul>
                              <li class="parameter-header">
                                <div class="parameter-name">PARAMETER</div>
                                <div class="parameter-type">TYPE</div>
                                <div class="parameter-desc">DESCRIPTION</div>
                                <div class="parameter-value">VALUE</div>
                              </li>
                                                           <li>
                                <div class="parameter-name">name</div>
                                <div class="parameter-type">string</div>
                                <div class="parameter-desc">The name of a User</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="name">
                                </div>
                              </li>
                             <li>
                                <div class="parameter-name">email</div>
                                <div class="parameter-type">string</div>
                                <div class="parameter-desc">The email of a User</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="email">
                                </div>
                              </li>
                             <li>
                                <div class="parameter-name">password</div>
                                <div class="parameter-type">string</div>
                                <div class="parameter-desc">The password of a User</div>
                                <div class="parameter-value">
                                    <input type="password" class="parameter-value-text" name="password">
                                </div>
                              </li>

                            </ul>
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="POST"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="User_update"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>PUT</h2></li>
                            <li><h3>update</h3></li>
                            <li>api/user/{id}</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Update the specified User resource.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">PUT /user/{id}</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/user/{id}" type="PUT">
                          <div class="endpoint-paramenters">
                            <h4>Parameters</h4>
                            <ul>
                              <li class="parameter-header">
                                <div class="parameter-name">PARAMETER</div>
                                <div class="parameter-type">TYPE</div>
                                <div class="parameter-desc">DESCRIPTION</div>
                                <div class="parameter-value">VALUE</div>
                              </li>
                                                           <li>
                                <div class="parameter-name">id</div>
                                <div class="parameter-type">int</div>
                                <div class="parameter-desc">The id of a User</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="id">
                                </div>
                              </li>
                             <li>
                                <div class="parameter-name">name</div>
                                <div class="parameter-type">string</div>
                                <div class="parameter-desc">The name of a User</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="name">
                                </div>
                              </li>
                             <li>
                                <div class="parameter-name">email</div>
                                <div class="parameter-type">string</div>
                                <div class="parameter-desc">The email of a User</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="email">
                                </div>
                              </li>
                             <li>
                                <div class="parameter-name">password</div>
                                <div class="parameter-type">string</div>
                                <div class="parameter-desc">The password of a User</div>
                                <div class="parameter-value">
                                    <input type="password" class="parameter-value-text" name="password">
                                </div>
                              </li>

                            </ul>
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="PUT"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="User_delete"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>DELETE</h2></li>
                            <li><h3>delete</h3></li>
                            <li>api/user/{id}</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Update the specified User resource.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">DELETE /user/{id}</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/user/{id}" type="DELETE">
                          <div class="endpoint-paramenters">
                            <h4>Parameters</h4>
                            <ul>
                              <li class="parameter-header">
                                <div class="parameter-name">PARAMETER</div>
                                <div class="parameter-type">TYPE</div>
                                <div class="parameter-desc">DESCRIPTION</div>
                                <div class="parameter-value">VALUE</div>
                              </li>
                                                           <li>
                                <div class="parameter-name">id</div>
                                <div class="parameter-type">int</div>
                                <div class="parameter-desc">The id of a User</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="id">
                                </div>
                              </li>

                            </ul>
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="DELETE"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>
                        

                                                <a href="#" class="waypoint" name="Ingredient"></a>
                        <h2>Ingredient</h2>
                        <p></p>

                        
                        <a href="#" class="waypoint" name="Ingredient_index"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>GET</h2></li>
                            <li><h3>index</h3></li>
                            <li>api/ingredient</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Display the Ingredients resource.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">GET /ingredient</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/ingredient" type="GET">
                          <div class="endpoint-paramenters">
                            
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="GET"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="Ingredient_show"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>GET</h2></li>
                            <li><h3>show</h3></li>
                            <li>api/ingredient/{id}</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Display the specified Ingredient resource.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">GET /ingredient/{id}</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/ingredient/{id}" type="GET">
                          <div class="endpoint-paramenters">
                            <h4>Parameters</h4>
                            <ul>
                              <li class="parameter-header">
                                <div class="parameter-name">PARAMETER</div>
                                <div class="parameter-type">TYPE</div>
                                <div class="parameter-desc">DESCRIPTION</div>
                                <div class="parameter-value">VALUE</div>
                              </li>
                                                           <li>
                                <div class="parameter-name">id</div>
                                <div class="parameter-type">int</div>
                                <div class="parameter-desc">The id of a Ingredient</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="id">
                                </div>
                              </li>

                            </ul>
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="GET"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="Ingredient_withRecipes"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>GET</h2></li>
                            <li><h3>withRecipes</h3></li>
                            <li>api/ingredient/{id}/recipes</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Display the specified Ingredient resource with recipes.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">GET /ingredient/{id}/recipe</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/ingredient/{id}/recipes" type="GET">
                          <div class="endpoint-paramenters">
                            <h4>Parameters</h4>
                            <ul>
                              <li class="parameter-header">
                                <div class="parameter-name">PARAMETER</div>
                                <div class="parameter-type">TYPE</div>
                                <div class="parameter-desc">DESCRIPTION</div>
                                <div class="parameter-value">VALUE</div>
                              </li>
                                                           <li>
                                <div class="parameter-name">id</div>
                                <div class="parameter-type">int</div>
                                <div class="parameter-desc">The id of a Ingredient</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="id">
                                </div>
                              </li>

                            </ul>
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="GET"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="Ingredient_store"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>POST</h2></li>
                            <li><h3>store</h3></li>
                            <li>api/ingredient</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Create the specified Ingredient resource.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">POST /ingredient</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/ingredient" type="POST">
                          <div class="endpoint-paramenters">
                            <h4>Parameters</h4>
                            <ul>
                              <li class="parameter-header">
                                <div class="parameter-name">PARAMETER</div>
                                <div class="parameter-type">TYPE</div>
                                <div class="parameter-desc">DESCRIPTION</div>
                                <div class="parameter-value">VALUE</div>
                              </li>
                                                           <li>
                                <div class="parameter-name">name</div>
                                <div class="parameter-type">string</div>
                                <div class="parameter-desc">The name of a Ingredient</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="name">
                                </div>
                              </li>
                             <li>
                                <div class="parameter-name">created_by_id</div>
                                <div class="parameter-type">int</div>
                                <div class="parameter-desc">The id of user who created a Ingredient</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="created_by_id">
                                </div>
                              </li>

                            </ul>
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="POST"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="Ingredient_update"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>PUT</h2></li>
                            <li><h3>update</h3></li>
                            <li>api/ingredient/{id}</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Update the specified Ingredient resource.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">PUT /ingredient/{id}</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/ingredient/{id}" type="PUT">
                          <div class="endpoint-paramenters">
                            <h4>Parameters</h4>
                            <ul>
                              <li class="parameter-header">
                                <div class="parameter-name">PARAMETER</div>
                                <div class="parameter-type">TYPE</div>
                                <div class="parameter-desc">DESCRIPTION</div>
                                <div class="parameter-value">VALUE</div>
                              </li>
                                                           <li>
                                <div class="parameter-name">id</div>
                                <div class="parameter-type">int</div>
                                <div class="parameter-desc">The id of a Ingredient</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="id">
                                </div>
                              </li>
                             <li>
                                <div class="parameter-name">name</div>
                                <div class="parameter-type">string</div>
                                <div class="parameter-desc">The name of a Ingredient</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="name">
                                </div>
                              </li>
                             <li>
                                <div class="parameter-name">created_by_id</div>
                                <div class="parameter-type">int</div>
                                <div class="parameter-desc">The id of user who created a Ingredient</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="created_by_id">
                                </div>
                              </li>

                            </ul>
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="PUT"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="Ingredient_delete"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>DELETE</h2></li>
                            <li><h3>delete</h3></li>
                            <li>api/ingredient/{id}</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Update the specified Ingredient resource.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">DELETE /ingredient/{id}</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/ingredient/{id}" type="DELETE">
                          <div class="endpoint-paramenters">
                            <h4>Parameters</h4>
                            <ul>
                              <li class="parameter-header">
                                <div class="parameter-name">PARAMETER</div>
                                <div class="parameter-type">TYPE</div>
                                <div class="parameter-desc">DESCRIPTION</div>
                                <div class="parameter-value">VALUE</div>
                              </li>
                                                           <li>
                                <div class="parameter-name">id</div>
                                <div class="parameter-type">int</div>
                                <div class="parameter-desc">The id of a Ingredient</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="id">
                                </div>
                              </li>

                            </ul>
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="DELETE"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>
                        

                                                <a href="#" class="waypoint" name="Recipe"></a>
                        <h2>Recipe</h2>
                        <p></p>

                        
                        <a href="#" class="waypoint" name="Recipe_index"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>GET</h2></li>
                            <li><h3>index</h3></li>
                            <li>api/recipe</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Display the Recipes resource.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">GET /recipe</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/recipe" type="GET">
                          <div class="endpoint-paramenters">
                            
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="GET"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="Recipe_randomDailyMenu"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>GET</h2></li>
                            <li><h3>randomDailyMenu</h3></li>
                            <li>api/recipe/menu</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Display random daily menu.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">GET /recipe/menu/</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/recipe/menu" type="GET">
                          <div class="endpoint-paramenters">
                            
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="GET"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="Recipe_query"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>GET</h2></li>
                            <li><h3>query</h3></li>
                            <li>api/recipe/query/{limit}</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Search by phrase provided by user.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">GET /recipe/query/{limit}</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/recipe/query/{limit}" type="GET">
                          <div class="endpoint-paramenters">
                            <h4>Parameters</h4>
                            <ul>
                              <li class="parameter-header">
                                <div class="parameter-name">PARAMETER</div>
                                <div class="parameter-type">TYPE</div>
                                <div class="parameter-desc">DESCRIPTION</div>
                                <div class="parameter-value">VALUE</div>
                              </li>
                                                           <li>
                                <div class="parameter-name">limit</div>
                                <div class="parameter-type">int</div>
                                <div class="parameter-desc">Limit of results number</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="limit">
                                </div>
                              </li>
                             <li>
                                <div class="parameter-name">query</div>
                                <div class="parameter-type">string</div>
                                <div class="parameter-desc">Phrase provided by user</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="query">
                                </div>
                              </li>

                            </ul>
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="GET"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="Recipe_topRated"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>GET</h2></li>
                            <li><h3>topRated</h3></li>
                            <li>api/recipe/top-rated/{limit}</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Display the 10 of Top Rated Recipes resource.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">GET /recipe/top-rated/{limit}</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/recipe/top-rated/{limit}" type="GET">
                          <div class="endpoint-paramenters">
                            <h4>Parameters</h4>
                            <ul>
                              <li class="parameter-header">
                                <div class="parameter-name">PARAMETER</div>
                                <div class="parameter-type">TYPE</div>
                                <div class="parameter-desc">DESCRIPTION</div>
                                <div class="parameter-value">VALUE</div>
                              </li>
                                                           <li>
                                <div class="parameter-name">limit</div>
                                <div class="parameter-type">int</div>
                                <div class="parameter-desc">Limit of results number</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="limit">
                                </div>
                              </li>

                            </ul>
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="GET"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="Recipe_mostCommented"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>GET</h2></li>
                            <li><h3>mostCommented</h3></li>
                            <li>api/recipe/most-commented/{limit}</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Display the 10 of Most Commented Recipes resource.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">GET /recipe/most-commented/{limit}</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/recipe/most-commented/{limit}" type="GET">
                          <div class="endpoint-paramenters">
                            <h4>Parameters</h4>
                            <ul>
                              <li class="parameter-header">
                                <div class="parameter-name">PARAMETER</div>
                                <div class="parameter-type">TYPE</div>
                                <div class="parameter-desc">DESCRIPTION</div>
                                <div class="parameter-value">VALUE</div>
                              </li>
                                                           <li>
                                <div class="parameter-name">limit</div>
                                <div class="parameter-type">int</div>
                                <div class="parameter-desc">Limit of results number</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="limit">
                                </div>
                              </li>

                            </ul>
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="GET"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="Recipe_show"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>GET</h2></li>
                            <li><h3>show</h3></li>
                            <li>api/recipe/{id}</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Display the specified Recipe resource.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">GET /recipe/{id}</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/recipe/{id}" type="GET">
                          <div class="endpoint-paramenters">
                            <h4>Parameters</h4>
                            <ul>
                              <li class="parameter-header">
                                <div class="parameter-name">PARAMETER</div>
                                <div class="parameter-type">TYPE</div>
                                <div class="parameter-desc">DESCRIPTION</div>
                                <div class="parameter-value">VALUE</div>
                              </li>
                                                           <li>
                                <div class="parameter-name">id</div>
                                <div class="parameter-type">int</div>
                                <div class="parameter-desc">The id of a Recipe</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="id">
                                </div>
                              </li>

                            </ul>
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="GET"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="Recipe_store"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>POST</h2></li>
                            <li><h3>store</h3></li>
                            <li>api/recipe</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Create the specified Recipe resource.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">POST /recipe</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/recipe" type="POST">
                          <div class="endpoint-paramenters">
                            <h4>Parameters</h4>
                            <ul>
                              <li class="parameter-header">
                                <div class="parameter-name">PARAMETER</div>
                                <div class="parameter-type">TYPE</div>
                                <div class="parameter-desc">DESCRIPTION</div>
                                <div class="parameter-value">VALUE</div>
                              </li>
                                                           <li>
                                <div class="parameter-name">created_by_id</div>
                                <div class="parameter-type">int</div>
                                <div class="parameter-desc">The id of User who created a Recipe</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="created_by_id">
                                </div>
                              </li>
                             <li>
                                <div class="parameter-name">title</div>
                                <div class="parameter-type">string</div>
                                <div class="parameter-desc">The title of  a Recipe</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="title">
                                </div>
                              </li>
                             <li>
                                <div class="parameter-name">description</div>
                                <div class="parameter-type">string</div>
                                <div class="parameter-desc">The description of  a Recipe</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="description">
                                </div>
                              </li>
                             <li>
                                <div class="parameter-name">required_time_in_minutes</div>
                                <div class="parameter-type">string</div>
                                <div class="parameter-desc">The required_time_in_minutes of  a Recipe</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="required_time_in_minutes">
                                </div>
                              </li>
                             <li>
                                <div class="parameter-name">cuisine</div>
                                <div class="parameter-type">string</div>
                                <div class="parameter-desc">The cuisine of  a Recipe</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="cuisine">
                                </div>
                              </li>
                             <li>
                                <div class="parameter-name">category</div>
                                <div class="parameter-type">string</div>
                                <div class="parameter-desc">The category of  a Recipe</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="category">
                                </div>
                              </li>

                            </ul>
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="POST"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="Recipe_update"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>PUT</h2></li>
                            <li><h3>update</h3></li>
                            <li>api/recipe/{id}</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Update the specified Recipe resource.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">PUT /recipe/{id}</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/recipe/{id}" type="PUT">
                          <div class="endpoint-paramenters">
                            <h4>Parameters</h4>
                            <ul>
                              <li class="parameter-header">
                                <div class="parameter-name">PARAMETER</div>
                                <div class="parameter-type">TYPE</div>
                                <div class="parameter-desc">DESCRIPTION</div>
                                <div class="parameter-value">VALUE</div>
                              </li>
                                                           <li>
                                <div class="parameter-name">id</div>
                                <div class="parameter-type">int</div>
                                <div class="parameter-desc">The id of a Recipe</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="id">
                                </div>
                              </li>
                             <li>
                                <div class="parameter-name">created_by_id</div>
                                <div class="parameter-type">int</div>
                                <div class="parameter-desc">The id of User who created a Recipe</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="created_by_id">
                                </div>
                              </li>
                             <li>
                                <div class="parameter-name">title</div>
                                <div class="parameter-type">string</div>
                                <div class="parameter-desc">The title of  a Recipe</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="title">
                                </div>
                              </li>
                             <li>
                                <div class="parameter-name">description</div>
                                <div class="parameter-type">string</div>
                                <div class="parameter-desc">The description of  a Recipe</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="description">
                                </div>
                              </li>
                             <li>
                                <div class="parameter-name">required_time_in_minutes</div>
                                <div class="parameter-type">string</div>
                                <div class="parameter-desc">The required_time_in_minutes of  a Recipe</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="required_time_in_minutes">
                                </div>
                              </li>
                             <li>
                                <div class="parameter-name">cuisine</div>
                                <div class="parameter-type">string</div>
                                <div class="parameter-desc">The cuisine of  a Recipe</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="cuisine">
                                </div>
                              </li>
                             <li>
                                <div class="parameter-name">category</div>
                                <div class="parameter-type">string</div>
                                <div class="parameter-desc">The category of  a Recipe</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="category">
                                </div>
                              </li>

                            </ul>
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="PUT"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="Recipe_delete"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>DELETE</h2></li>
                            <li><h3>delete</h3></li>
                            <li>api/recipe/{id}</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Update the specified Recipe resource.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">DELETE /recipe/{id}</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/recipe/{id}" type="DELETE">
                          <div class="endpoint-paramenters">
                            <h4>Parameters</h4>
                            <ul>
                              <li class="parameter-header">
                                <div class="parameter-name">PARAMETER</div>
                                <div class="parameter-type">TYPE</div>
                                <div class="parameter-desc">DESCRIPTION</div>
                                <div class="parameter-value">VALUE</div>
                              </li>
                                                           <li>
                                <div class="parameter-name">id</div>
                                <div class="parameter-type">int</div>
                                <div class="parameter-desc">The id of a Recipe</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="id">
                                </div>
                              </li>

                            </ul>
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="DELETE"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>
                        

                                                <a href="#" class="waypoint" name="Comment"></a>
                        <h2>Comment</h2>
                        <p></p>

                        
                        <a href="#" class="waypoint" name="Comment_index"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>GET</h2></li>
                            <li><h3>index</h3></li>
                            <li>api/comment</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Display the Comments resource.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">GET /comment</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/comment" type="GET">
                          <div class="endpoint-paramenters">
                            
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="GET"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="Comment_recent"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>GET</h2></li>
                            <li><h3>recent</h3></li>
                            <li>api/comment/recent/{limit}</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Display recent comments.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">GET /comments/recent/{limit}</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/comment/recent/{limit}" type="GET">
                          <div class="endpoint-paramenters">
                            <h4>Parameters</h4>
                            <ul>
                              <li class="parameter-header">
                                <div class="parameter-name">PARAMETER</div>
                                <div class="parameter-type">TYPE</div>
                                <div class="parameter-desc">DESCRIPTION</div>
                                <div class="parameter-value">VALUE</div>
                              </li>
                                                           <li>
                                <div class="parameter-name">limit</div>
                                <div class="parameter-type">int</div>
                                <div class="parameter-desc">Limit of results number</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="limit">
                                </div>
                              </li>

                            </ul>
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="GET"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="Comment_show"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>GET</h2></li>
                            <li><h3>show</h3></li>
                            <li>api/comment/{id}</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Display the specified Comment resource.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">GET /comment/{id}</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/comment/{id}" type="GET">
                          <div class="endpoint-paramenters">
                            <h4>Parameters</h4>
                            <ul>
                              <li class="parameter-header">
                                <div class="parameter-name">PARAMETER</div>
                                <div class="parameter-type">TYPE</div>
                                <div class="parameter-desc">DESCRIPTION</div>
                                <div class="parameter-value">VALUE</div>
                              </li>
                                                           <li>
                                <div class="parameter-name">id</div>
                                <div class="parameter-type">int</div>
                                <div class="parameter-desc">The id of a Comment</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="id">
                                </div>
                              </li>

                            </ul>
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="GET"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="Comment_store"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>POST</h2></li>
                            <li><h3>store</h3></li>
                            <li>api/comment</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Create the specified Comment resource.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">POST /comment</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/comment" type="POST">
                          <div class="endpoint-paramenters">
                            <h4>Parameters</h4>
                            <ul>
                              <li class="parameter-header">
                                <div class="parameter-name">PARAMETER</div>
                                <div class="parameter-type">TYPE</div>
                                <div class="parameter-desc">DESCRIPTION</div>
                                <div class="parameter-value">VALUE</div>
                              </li>
                                                           <li>
                                <div class="parameter-name">content</div>
                                <div class="parameter-type">string</div>
                                <div class="parameter-desc">The name of a Comment</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="content">
                                </div>
                              </li>
                             <li>
                                <div class="parameter-name">created_by_id</div>
                                <div class="parameter-type">string</div>
                                <div class="parameter-desc">The id of the User</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="created_by_id">
                                </div>
                              </li>
                             <li>
                                <div class="parameter-name">recipe_id</div>
                                <div class="parameter-type">string</div>
                                <div class="parameter-desc">The id of the Recipe</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="recipe_id">
                                </div>
                              </li>

                            </ul>
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="POST"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="Comment_update"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>PUT</h2></li>
                            <li><h3>update</h3></li>
                            <li>api/comment/{id}</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Update the specified Comment resource.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">PUT /comment/{id}</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/comment/{id}" type="PUT">
                          <div class="endpoint-paramenters">
                            <h4>Parameters</h4>
                            <ul>
                              <li class="parameter-header">
                                <div class="parameter-name">PARAMETER</div>
                                <div class="parameter-type">TYPE</div>
                                <div class="parameter-desc">DESCRIPTION</div>
                                <div class="parameter-value">VALUE</div>
                              </li>
                                                           <li>
                                <div class="parameter-name">id</div>
                                <div class="parameter-type">int</div>
                                <div class="parameter-desc">The id of a Comment</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="id">
                                </div>
                              </li>
                             <li>
                                <div class="parameter-name">content</div>
                                <div class="parameter-type">string</div>
                                <div class="parameter-desc">The name of a Comment</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="content">
                                </div>
                              </li>
                             <li>
                                <div class="parameter-name">created_by_id</div>
                                <div class="parameter-type">string</div>
                                <div class="parameter-desc">The id of the User</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="created_by_id">
                                </div>
                              </li>
                             <li>
                                <div class="parameter-name">recipe_id</div>
                                <div class="parameter-type">string</div>
                                <div class="parameter-desc">The id of the Recipe</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="recipe_id">
                                </div>
                              </li>

                            </ul>
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="PUT"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="Comment_delete"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>DELETE</h2></li>
                            <li><h3>delete</h3></li>
                            <li>api/comment/{id}</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Update the specified Comment resource.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">DELETE /comment/{id}</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/comment/{id}" type="DELETE">
                          <div class="endpoint-paramenters">
                            <h4>Parameters</h4>
                            <ul>
                              <li class="parameter-header">
                                <div class="parameter-name">PARAMETER</div>
                                <div class="parameter-type">TYPE</div>
                                <div class="parameter-desc">DESCRIPTION</div>
                                <div class="parameter-value">VALUE</div>
                              </li>
                                                           <li>
                                <div class="parameter-name">id</div>
                                <div class="parameter-type">int</div>
                                <div class="parameter-desc">The id of a Comment</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="id">
                                </div>
                              </li>

                            </ul>
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="DELETE"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>


                    </div>
                </div>
            </div>
        </div>


    </body>
</html>
