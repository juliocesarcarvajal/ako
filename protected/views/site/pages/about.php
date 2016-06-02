<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'Acerca de',
);
?>
<section class="content">
            <section class="color1 mb40">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <h2>Buttons</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span12">
                            <p>Fancy larger or smaller buttons? Add <code>.btn-large</code>, <code>.btn-small</code>, or <code>.btn-mini</code> for additional sizes.</p>
                            <div class="bs-docs-example">
                                <button class="btn btn-large" type="button">Large button</button>
                                <button class="btn" type="button">Default button</button>
                                <button class="btn btn-small" type="button">Small button</button>
                                <button class="btn btn-mini" type="button">Mini button</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="color1 mb40">
                <div class="container">
                    <div class="row">
                        <div class="span6">
                            <h2>Tabs</h2>
                            <p>Add quick, dynamic tab functionality to transition through panes of local content, even via dropdown menus.</p>
                            <div class="bs-docs-example">
                                <ul class="nav nav-tabs" id="myTab">
                                    <li class="active"><a data-toggle="tab" href="#homeTab">Home</a></li>
                                    <li><a data-toggle="tab" href="#profile">Profile</a></li>
                                    <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a data-toggle="tab" href="#dropdown1">@fat</a></li>
                                            <li><a data-toggle="tab" href="#dropdown2">@mdo</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div id="homeTab" class="tab-pane fade in active">
                                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                                    </div>
                                    <div id="profile" class="tab-pane fade">
                                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                                    </div>
                                    <div id="dropdown1" class="tab-pane fade">
                                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                                    </div>
                                    <div id="dropdown2" class="tab-pane fade">
                                        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="span6">
                            <h2>Accordions</h2>
                            <div class="accordion" id="accordion2">
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                            Collapsible Group Item #1
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                             <p>You want a guarantee, buy a toaster. Dyin' ain't much of a livin', boy. You see, in this world there's two kinds of people, my friend: Those with loaded guns and those who dig. You dig. Are you feeling lucky punk This is my gun, Clyde! What you have to ask yourself is, do I feel lucky. Well do ya' punk? Are you feeling lucky punk.</p><p> When a naked man's chasing a woman through an alley with a butcher knife and a hard-on, I figure he's not out collecting for the Red Cross. Well, do you have anything to say for yourself? Dyin' ain't much of a livin', boy. Are you feeling lucky punk </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                            Collapsible Group Item #2
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                           <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="color1 mb40">
                <div class="container">
                    <div class="row">
                        <div class="span6">
                            <h2>Alerts</h2>
                            <p>Wrap any text and an optional dismiss button in <code>.alert</code> for a basic warning alert message.</p>
                            <div class="bs-docs-example">
                                <div class="alert">
                                    <button data-dismiss="alert" class="close" type="button">×</button>
                                    <strong>Warning!</strong> Best check yo self, you're not looking too good. </div>
                                </div>
                                <div class="bs-docs-example">
                                    <div class="alert alert-error">
                                        <button data-dismiss="alert" class="close" type="button">×</button>
                                        <strong>Oh snap!</strong> Change a few things up and try submitting again. </div>
                                    </div>
                                    <div class="bs-docs-example">
                                        <div class="alert alert-success">
                                            <button data-dismiss="alert" class="close" type="button">×</button>
                                            <strong>Well done!</strong> You successfully read this important alert message. </div>
                                        </div>
                                        <div class="alert alert-info">
                                            <button data-dismiss="alert" class="close" type="button">×</button>
                                            <strong>Heads up!</strong> This alert needs your attention, but it's not super important. </div>
                                        </div>
                                         <div class="span6">
                                            <h2>Progress bars</h2>
                                            <div class="bs-docs-example">
                                                <div  class="progress progress-info">
                                                    <div class="bar ninety"></div>
                                                </div>
                                                <div class="progress progress-success">
                                                    <div class="bar seventy"></div>
                                                </div>
                                                <div class="progress progress-warning">
                                                    <div  class="bar fifty"></div>
                                                </div>
                                                <div class="progress progress-danger">
                                                    <div  class="bar ninety"></div>
                                                </div>
                                            </div>
                                            <p>Similar to the solid colors, we have varied striped progress bars.</p>
                                            <div class="bs-docs-example">
                                                <div class="progress progress-info progress-striped">
                                                    <div  class="bar ninety"></div>
                                                </div>
                                                <div  class="progress progress-success progress-striped">
                                                    <div class="bar seventy"></div>
                                                </div>
                                                <div  class="progress progress-warning progress-striped">
                                                    <div class="bar fifty"></div>
                                                </div>
                                                <div class="progress progress-danger progress-striped">
                                                    <div  class="bar ninety"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="mb40">
                                <div class="container">
                                    <section>
                                        <div class="row">
                                            <div class="span12">
                                                <h2><span>Columns</span></h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="span12">
                                                <h3>2 Columns</h3>
                                            </div>
                                            <div class="span6">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium pretium rutrum. Donec sodales interdum blandit. Nullam volutpat, elit sed auctor condimentum, augue orci volutpat elit, eu ultrices nulla justo in dui. In aliquam semper metus, ut facilisis erat condimentum porta. Aliquam vel libero urna, ut suscipit quam. Vivamus condimentum sem ac justo commodo lacinia. Nulla facilisi.</p>
                                            </div>
                                            <div class="span6">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium pretium rutrum. Donec sodales interdum blandit. Nullam volutpat, elit sed auctor condimentum, augue orci volutpat elit, eu ultrices nulla justo in dui. In aliquam semper metus, ut facilisis erat condimentum porta. Aliquam vel libero urna, ut suscipit quam. Vivamus condimentum sem ac justo commodo lacinia. Nulla facilisi.</p>
                                            </div>
                                        </div>
                                    </section>
                                    <section>
                                        <div class="row">
                                            <div class="span12">
                                                <h3>3 Columns</h3>
                                            </div>
                                            <div class="span4">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium pretium rutrum. Donec sodales interdum blandit. Nullam volutpat, elit sed auctor condimentum, augue orci volutpat elit, eu ultrices nulla justo in dui. In aliquam semper metus, ut facilisis erat condimentum porta. Aliquam vel libero urna, ut suscipit quam. Vivamus condimentum sem ac justo commodo lacinia. Nulla facilisi.</p>
                                            </div>
                                            <div class="span4">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium pretium rutrum. Donec sodales interdum blandit. Nullam volutpat, elit sed auctor condimentum, augue orci volutpat elit, eu ultrices nulla justo in dui. In aliquam semper metus, ut facilisis erat condimentum porta. Aliquam vel libero urna, ut suscipit quam. Vivamus condimentum sem ac justo commodo lacinia. Nulla facilisi.</p>
                                            </div>
                                            <div class="span4">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium pretium rutrum. Donec sodales interdum blandit. Nullam volutpat, elit sed auctor condimentum, augue orci volutpat elit, eu ultrices nulla justo in dui. In aliquam semper metus, ut facilisis erat condimentum porta. Aliquam vel libero urna, ut suscipit quam. Vivamus condimentum sem ac justo commodo lacinia. Nulla facilisi.</p>
                                            </div>
                                        </div>
                                    </section>
                                    <section>
                                        <div class="row">
                                            <div class="span12">
                                                <h3>2/3 Columns</h3>
                                            </div>
                                            <div class="span8">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium pretium rutrum. Donec sodales interdum blandit. Nullam volutpat, elit sed auctor condimentum, augue orci volutpat elit, eu ultrices nulla justo in dui. In aliquam semper metus, ut facilisis erat condimentum porta. Aliquam vel libero urna, ut suscipit quam. Vivamus condimentum sem ac justo commodo lacinia. Nulla facilisi.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium pretium rutrum. Donec sodales interdum blandit. Nullam volutpat, elit sed auctor condimentum, augue orci volutpat elit, eu ultrices nulla justo in dui. In aliquam semper metus, ut facilisis erat condimentum porta. Aliquam vel libero urna, ut suscipit quam. Vivamus condimentum sem ac justo commodo lacinia. Nulla facilisi.</p>
                                            </div>
                                            <div class="span4">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium pretium rutrum. Donec sodales interdum blandit. Nullam volutpat, elit sed auctor condimentum, augue orci volutpat elit, eu ultrices nulla justo in dui. In aliquam semper metus, ut facilisis erat condimentum porta. Aliquam vel libero urna, ut suscipit quam. Vivamus condimentum sem ac justo commodo lacinia. Nulla facilisi.</p>
                                            </div>
                                        </div>
                                    </section>
                                    <section>
                                        <div class="row">
                                            <div class="span12">
                                                <h3>4 Columns</h3>
                                            </div>
                                            <div class="span3">
                                                <p>Lorem ipsum dolor sit amet humerefe, consectetur adipiscing elit. Sediozezed pretium pretium rutrum. Donectablez sodales interdum blandit. Nullamzezez volutpat, elit sed auctor condimentes, augue orci volutpat elit, eu ultriceszez nulla justo in dui. In aliquam semperzd metus, ut facilisis erat condimentumau porta. Aliquam vel libero urna, uthazfd suscipit quam. Vivamus condimentum sem ac justo commodo lacinia. Nullazd facilisi.</p>
                                            </div>
                                            <div class="span3">
                                                <p>Lorem ipsum dolor sit amet humerefe, consectetur adipiscing elit. Sediozezed pretium pretium rutrum. Donectablez sodales interdum blandit. Nullamzezez volutpat, elit sed auctor condimentes, augue orci volutpat elit, eu ultriceszez nulla justo in dui. In aliquam semperzd metus, ut facilisis erat condimentumau porta. Aliquam vel libero urna, uthazfd suscipit quam. Vivamus condimentum sem ac justo commodo lacinia. Nullazd facilisi.</p>
                                            </div>
                                            <div class="span3">
                                                <p>Lorem ipsum dolor sit amet humerefe, consectetur adipiscing elit. Sediozezed pretium pretium rutrum. Donectablez sodales interdum blandit. Nullamzezez volutpat, elit sed auctor condimentes, augue orci volutpat elit, eu ultriceszez nulla justo in dui. In aliquam semperzd metus, ut facilisis erat condimentumau porta. Aliquam vel libero urna, uthazfd suscipit quam. Vivamus condimentum sem ac justo commodo lacinia. Nullazd facilisi.</p>
                                            </div>
                                            <div class="span3">
                                                <p>Lorem ipsum dolor sit amet humerefe, consectetur adipiscing elit. Sediozezed pretium pretium rutrum. Donectablez sodales interdum blandit. Nullamzezez volutpat, elit sed auctor condimentes, augue orci volutpat elit, eu ultriceszez nulla justo in dui. In aliquam semperzd metus, ut facilisis erat condimentumau porta. Aliquam vel libero urna, uthazfd suscipit quam. Vivamus condimentum sem ac justo commodo lacinia. Nullazd facilisi.</p>
                                            </div>
                                        </div>
                                    </section>
                                    <section>
                                        <div class="row">
                                            <div class="span12">
                                                <h3>5 Columns</h3>
                                            </div>
                                            <div class="span12">
                                                <div class="one_fifth">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elites. Sed pretium pretium rutrum. Donec sodales interdumdsdz blandit. Nullam volutpat, elit sed auctor condimentumdd, augue orci volutpat elit, eu ultrices nulla justo in dui. In aliquam semper metus, ut facilisis erat condimentums porta. Aliquam vel liberotum urna, ut suscipit quamofdf. Vivamus condimentum sem ac justo commodo laciniass. Nulla facilisi.</p>
                                                </div>
                                                <div class="one_fifth">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elites. Sed pretium pretium rutrum. Donec sodales interdumdsdd blandit. Nullam volutpat, elit sed auctor condimentumdd, augue orci volutpat elit, eu ultrices nulla justo in dui. In aliquam semper metus, ut facilisis erat condimentums porta. Aliquam vel liberotum urna, ut suscipit quamofdf. Vivamus condimentum sem ac justo commodo laciniass. Nulla facilisi.</p>
                                                </div>
                                                <div class="one_fifth">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elites. Sed pretium pretium rutrum. Donec sodales interdumdszd blandit. Nullam volutpat, elit sed auctor condimentumdd, augue orci volutpat elit, eu ultrices nulla justo in dui. In aliquam semper metus, ut facilisis erat condimentums porta. Aliquam vel liberotum urna, ut suscipit quamofdf. Vivamus condimentum sem ac justo commodo laciniass. Nulla facilisi.</p>
                                                </div>
                                                <div class="one_fifth">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elites. Sed pretium pretium rutrum. Donec sodales interdumdsdr blandit. Nullam volutpat, elit sed auctor condimentumdd, augue orci volutpat elit, eu ultrices nulla justo in dui. In aliquam semper metus, ut facilisis erat condimentums porta. Aliquam vel liberotum urna, ut suscipit quamofdf. Vivamus condimentum sem ac justo commodo laciniass. Nulla facilisi.</p>
                                                </div>
                                                <div class="one_fifth last">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elites. Sed pretium pretium rutrum. Donec sodales interdumdsdz blandit. Nullam volutpat, elit sed auctor condimentum, augue orci volutpat elit, eu ultrices nulla justo in dui. In aliquam semper metus, ut facilisis erat condimentums porta. Aliquam vel liberotum urna, ut suscipit quamofdf. Vivamus condimentum sem ac justo commodo laciniass. Nulla facilisi.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </section>




                        </section>
