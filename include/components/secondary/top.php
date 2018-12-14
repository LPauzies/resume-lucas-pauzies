<?php

if (isset($_POST['email']) && isset($_POST['topic']) && isset($_POST['textarea'])) {

  sendMail($_POST['email'],"contact@cair0n.rf.gd",$_POST['topic'],$_POST['textarea']);
  unset($_POST);

}

?>
<a id="buttonsticked" onclick="topFunction()" class="btn-large"><i class="material-icons">arrow_upward</i></a>

<div id="top" class="animated fadeIn">

  <div class="row">
    <div class="col s2 animated fadeInLeft center-align">
      <a class="button-b" href="<?php echo HandleLangURL("en"); ?>"><h7>EN</h7></a>
      <a class="button-b" href="<?php echo HandleLangURL("fr"); ?>"><h7>FR</h7></a>
    </div>
    <div class="col s8">
    </div>
    <div class="col s2 animated fadeInRight center-align">
      <a class="button-b modal-trigger" href="#modalForm"><h7><?php echo $top['contact']; ?></h7></a>
    </div>

    <div id="modalForm" class="modal">
      <form id="formId" class="col s12" method="POST" action="/">
        <div class="modal-content">
          <h4 class="center-align"><?php echo $top['contact']; ?></h4>
          <div class="content">
                <div class="row">
                  <div class="input-field col s12">
                    <input name="email" id="email" type="email" class="validate" required>
                    <label for="email"><?php echo $top['email']; ?></label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input name="topic" id="topic" type="text" class="validate" required>
                    <label for="topic"><?php echo $top['topic']; ?></label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <textarea name="textarea" id="textarea" class="materialize-textarea" data-length="500" required></textarea>
                    <label for="textarea"><?php echo $top['body']; ?></label>
                  </div>
                </div>
          </div>
        </div>
        <div class="content">
          <div class="row center-align">
            <div class="green-text" id="formSuccess" hidden="hidden">
              <?php echo $top['success']; ?>
            </div>
            <div class="red-text" id="formErrorEmail" hidden="hidden">
              <?php echo $top['errorEmail']; ?>
            </div>
            <div class="red-text" id="formErrorTopic" hidden="hidden">
              <?php echo $top['errorTopic']; ?>
            </div>
            <div class="red-text" id="formErrorBody" hidden="hidden">
              <?php echo $top['errorBody']; ?>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" id="buttonSubmit" class="button-modal"><?php echo $top['send']; ?></button>
        </div>
      </form>
    </div>

  </div>

<!--
  <div class="row center-align">
    <div class="col s4">
    </div>
    <div class="col s8">
      <div class="row">
        <div id="titleTop" class="col s12 center-align animated fadeInRight">
          <h1>Lucas "Cair0n" Pauzies</h1>
        </div>
      </div>
    </div>
  </div>
-->

  <div class="container">
    <div class="row">
      <div class="col s1">
      </div>
      <div class="col s11">
        <h5 id="1" class="tw anim-typewriter1"><span class="keyword">public class</span> <span class="type">HelloWorld</span> {</h5>
      </div>
    </div>
    <div class="row">
      <div class="col s2">
      </div>
      <div class="col s10">
        <h5 id="2" class="tw-done anim-typewriter2"><span class="keyword">public static <i>void</i></span> main(<span class="type">String</span>[] <span class="args">args</span>) {</h5>
      </div>
    </div>
    <div class="row">
      <div class="col s3">
      </div>
      <div class="col s9">
        <h5 id="3" class="tw-done anim-typewriter3"><span class="type">Developer</span> developer<span class="keyword"> = new </span><span class="type">Developer</span>();</h5>
      </div>
    </div>
    <div class="row">
      <div class="col s3">
      </div>
      <div class="col s9">
        <h5 id="4" class="tw-done anim-typewriter4">developer<span class="keyword">.</span>setName(<span class="string">"Lucas 'Cair0n' Pauzies"</span>);</h5>
      </div>
    </div>
    <div class="row">
      <div class="col s3">
      </div>
      <div class="col s9">
        <h5 id="5" class="tw-done anim-typewriter5">developer<span class="keyword">.</span>setStatus(<span class="string">"<?php echo $top['status']; ?>"</span>);</h5>
      </div>
    </div>
    <div class="row">
      <div class="col s3">
      </div>
      <div class="col s9">
        <h5 id="6" class="tw-done anim-typewriter6">developer<span class="keyword">.</span>setHobbies(<span class="string">"<?php echo $top['hobbies']; ?>"</span>);</h5>
      </div>
    </div>
    <div class="row">
      <div class="col s3">
      </div>
      <div class="col s9">
        <h5 id="7" class="tw-done anim-typewriter7">developer<span class="keyword">.</span>setCurrentJob(<span class="string">"<?php echo $top['job']; ?>"</span>);</h5>
      </div>
    </div>
    <div class="row">
      <div class="col s3">
      </div>
      <div class="col s9">
        <h5 id="8" class="tw-done anim-typewriter8">developer<span class="keyword">.</span>code();</h5>
      </div>
    </div>
    <div class="row">
      <div class="col s2">
      </div>
      <div class="col s10">
        <h5 id="9" class="tw-done anim-typewriter9">}</h5>
      </div>
    </div>
    <div class="row">
      <div class="col s1">
      </div>
      <div class="col s11">
        <h5 id="10" class="tw-done anim-typewriter10">}</h5>
      </div>
    </div>
  </div>

</div>
