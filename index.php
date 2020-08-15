<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Care ABA | Care History</title>
  <!-- fontawesome -->
  <!-- <script src="https://kit.fontawesome.com/da045550a1.js" crossorigin="anonymous"></script> -->

  <!-- Google fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&amp;display=swap">

  <!-- CSS Stylesheet -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="styles1.css">

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="index1.js"></script>
</head>

<body>
    <div>
      <div style="background-color: rgb(240, 240, 240); border-bottom: 2px solid rgb(0, 121, 149);">
        <div class="pl-3 pt-1 pb-1">
          <h6>Eval Notes(Please save after each section)</h6>
        </div>
      </div>
      <div class="container-fluid p-0 m-0 pt-1">
        <ul class="tab tabs-choose">
          <li class="tablinks" onclick="openCity(event, 'Case')" id="defaultOpen">Case Histroy-Adult</li>
          <li class="tablinks" onclick="openCity(event, 'Articulation')">Articulation</li>
          <li class="tablinks" onclick="openCity(event, 'Receptive')">Receptive Language</li>
          <li class="tablinks" onclick="openCity(event, 'Expressive')">Expressive Language</li>
          <li class="tablinks" onclick="openCity(event, 'Fluency')">Fluency</li>
          <li class="tablinks" onclick="openCity(event, 'Voice')">Voice</li>
          <li class="tablinks" onclick="openCity(event, 'POC')">POC</li>
          <li class="tablinks" onclick="openCity(event, 'Goals')">Goals</li>
        </ul>
        <div id="Case" class="tabcontent">
          <div class="content-one">
            <div class="card">
              <div class="card-header bg-header font-weight-bold">
                Case History
              </div>
              <form autocomplete="off" class="card-body bg-blue p-0">
                <div class="row">
                  <div class="col-md-3"><strong>Language (s) spoken at home</strong>
                    <div class="row">
                      <div class="col-md-4 p-0">
                        <div class="checkbox"><label><input type="checkbox" value="English">
                            English
                          </label></div>
                        <div class="checkbox"><label><input type="checkbox" value="Spanish">
                            Spanish
                          </label></div>
                      </div>
                      <div class="col-md-8 p-0">
                        <div class="form-group"><label for="usr" class="m-0">Other Languages</label> <input type="text" class="form-control m-0"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3"><strong>Who lives with you?</strong>
                    <div class="row">
                      <div class="checkbox"><label><input type="checkbox" value="Spouse">
                          Spouse
                        </label></div>
                      <div class="checkbox"><label><input type="checkbox" value="Child">
                          Child
                        </label></div>
                      <div class="checkbox"><label><input type="checkbox" value="Parents">
                          Parents
                        </label></div>
                      <div class="checkbox"><label><input type="checkbox" value="Friends">
                          Friends
                        </label></div>
                      <div class="checkbox"><label><input type="checkbox" value="Alone">
                          Alone
                        </label></div>
                      <div class="checkbox"><label><input type="checkbox" value="Other Family">
                          Other Family
                        </label></div>
                    </div>
                    <div class="form-group">
                      <!---->
                    </div>
                  </div>
                  <div class="col-md-3"><strong>Are you currently working?</strong>
                    <div class="form-group mt-2"><select id="sel1" class="form-control">
                        <option value="No">No</option>
                        <option value="Yes">Yes</option>
                        <option value="Retired">Retired</option>
                      </select></div>
                  </div>
                  <div class="col-md-3"><strong>Do you have difficulty eating or drinking</strong>
                    <div class="row mt-2">
                      <div class="col-md-3 pl-0">
                        <div class="form-group"><select class="form-control pl-1 pr-0" id="eating" onchange="changeStatus()">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div  class="col-md-9 pl-0 pr-0">
                        <div style="visibility:hidden;" id="eatingtext" class="form-group">
                          <input type="text" name="" maxlength="50" class="form-control">
                          <span class="badge badge-secondry float-right">0/50</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12"><strong>Test(s) Completed</strong></div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="checkbox"><label><input type="checkbox" value="Video Fluoroscopy">
                        Video Fluoroscopy
                      </label></div>
                    <div class="checkbox"><label><input type="checkbox" value="Video Fluoroscopy">
                        Received Report
                      </label></div>
                  </div>
                  <div class="col-md-3">
                    <div class="checkbox"><label><input type="checkbox" value="Modified Barium Swallow">
                        Modified Barium Swallow
                      </label></div>
                    <div class="checkbox"><label><input type="checkbox" value="Modified Barium Swallow">
                        Received Report
                      </label></div>
                  </div>
                  <div class="col-md-3">
                    <div class="checkbox"><label><input type="checkbox" value="FEES">
                        FEES
                      </label></div>
                    <div class="checkbox"><label><input type="checkbox" value="FEES">
                        Received Report
                      </label></div>
                  </div>
                  <div class="col-md-3">
                    <div class="checkbox"><label><input type="checkbox" value="BedSide Swallow">
                        BedSide Swallow
                      </label></div>
                    <div class="checkbox"><label><input type="checkbox" value="BedSide Swallow">
                        Received Report
                      </label></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6"><strong>General Health</strong>
                    <div class="form-group"><textarea maxlength="1000" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/1000</span></div>
                  </div>
                  <div class="col-md-6"><strong>Surgeries</strong>
                    <div class="form-group"><textarea class="form-control"></textarea> <span maxlength="500" class="badge badge-secondry float-right">0/500</span></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3"><strong>Have You Received Any Speech Therapy Before</strong>
                    <div class="row mt-2">
                      <div class="col-md-3 pr-1 pl-0">
                        <div class="form-group"><select class="form-control pl-1 pr-0" id="Speech_Therapy" onchange="changeStatus1()">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div style="visibility:hidden;" id="Speech_Therapy_text" class="col-md-9 pl-0 pr-0">
                        <input type="text" name="" maxlength="50" class="form-control">
                        <span class="badge badge-secondry float-right">0/50</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3"><strong>Do You Have Difficulty Expressing Wants And Needs</strong>
                    <div class="row mt-2">
                      <div class="col-md-3 pr-1 pl-0">
                        <div class="form-group"><select id="Expressing_option" class="form-control pl-1 pr-0" onchange="changeStatus2()">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-9 pl-0 pr-0">
                        <div style="visibility:hidden;" id="Expressing_text" class="col-md-9 pl-0 pr-0">
                          <input type="text" name="" maxlength="50" class="form-control">
                          <span class="badge badge-secondry float-right">0/50</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3"><strong>Do others find it difficult to understand you</strong>
                    <div class="row mt-2">
                      <div class="col-md-3 pr-1 pl-0">
                        <div class="form-group"><select id="Understand_option" class="form-control pl-1 pr-0" onchange="changeStatus3()">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-9 pl-0 pr-0">
                        <div style="visibility:hidden;" id="Understand_text" class="col-md-9 pl-0 pr-0">
                          <input type="text" name="" maxlength="50" class="form-control">
                          <span class="badge badge-secondry float-right">0/50</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3"><strong>Do you have difficulty remembering things</strong>
                    <div class="row mt-2">
                      <div class="col-md-3 pr-1 pl-0">
                        <div class="form-group"><select id="Remember_option" class="form-control pl-1 pr-0" onchange="changeStatus4()">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-9 pl-0 pr-0">
                        <div style="visibility:hidden;" id="Remember_text" class="col-md-9 pl-0 pr-0">
                          <input type="text" name="" maxlength="50" class="form-control">
                          <span class="badge badge-secondry float-right">0/50</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4"><strong>Do you have difficulty finding the words when speaking</strong>
                    <div class="row mt-2">
                      <div class="col-md-2 pr-1 pl-0">
                        <div class="form-group"><select id="find_option" class="form-control pl-1 pr-0" onchange="changeStatus5()">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-10 pl-0 pr-0">
                        <div style="visibility:hidden;" id="find_text" class="col-md-9 pl-0 pr-0">
                          <input type="text" name="" maxlength="50" class="form-control">
                          <span class="badge badge-secondry float-right">0/50</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4"><strong>Do you have difficulty reading and/or writing?</strong>
                    <div class="row">
                      <div class="col-md-2 pr-1 pl-0">
                        <div class="form-group"><select id="read_option" class="form-control pl-1 pr-0" onchange="changeStatus6()">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-10 pl-0 pr-0">
                        <div style="visibility:hidden;" id="read_text" class="col-md-9 pl-0 pr-0">
                          <input type="text" name="" maxlength="50" class="form-control">
                          <span class="badge badge-secondry float-right">0/50</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4"><strong>Has there been any changes to your voice</strong>
                    <div class="row mt-2">
                      <div class="col-md-2 pr-1 pl-0">
                        <div class="form-group"><select id="change_option" class="form-control pl-1 pr-0" onchange="changeStatus7()">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-10 pl-0 pr-0">
                        <div style="visibility:hidden;" id="change_text" class="col-md-9 pl-0 pr-0">
                          <input type="text" name="" maxlength="50" class="form-control">
                          <span class="badge badge-secondry float-right">0/50</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6"><strong>Have you seen any of the following specialist?</strong>
                    <div class="row mb-0">
                      <div class="col-md-4">
                        <div class="checkbox"><label><input type="checkbox" value="Audiologist">
                            Audiologist
                          </label></div>
                        <div class="checkbox"><label><input type="checkbox" value="Audiologist">
                            Received Report
                          </label></div>
                      </div>
                      <div class="col-md-4">
                        <div class="checkbox"><label><input type="checkbox" value="Otolaryngologist">
                            Otolaryngologist
                          </label></div>
                        <div class="checkbox"><label><input type="checkbox" value="Otolaryngologist">
                            Received Report
                          </label></div>
                      </div>
                      <div class="col-md-4">
                        <div class="checkbox"><label><input type="checkbox" value="Neurologist">
                            Neurologist
                          </label></div>
                        <div class="checkbox"><label><input type="checkbox" value="Neurologist">
                            Received Report
                          </label></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3"><strong>Wear Glasses</strong>
                    <div class="form-group"><select class="form-control pl-1 pr-0">
                        <option value="No">No</option>
                        <option value="Yes">Yes</option>
                      </select></div>
                  </div>
                  <div class="col-md-3"><strong>Wears Hearing Aids</strong>
                    <div class="row">
                      <div class="col-md-3 pr-1 pl-0">
                        <div class="form-group"><select id="hear_option" class="form-control pl-1 pr-0" onchange="changeStatus8()">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-9 pl-0 pr-0">
                        <div style="visibility:hidden;" id="hear_text" class="col-md-9 pl-0 pr-0">
                          <input type="text" name="" maxlength="50" class="form-control">
                          <span class="badge badge-secondry float-right">0/50</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12"><strong>In which of the following communication areas do you have difficulties</strong></div>
                <div class="row pl-1">
                  <div class="checkbox"><label><input type="checkbox" value="Understanding Spoken Language">
                      Understanding Spoken Language
                    </label></div>
                  <div class="checkbox"><label><input type="checkbox" value="Reading">
                      Reading
                    </label></div>
                  <div class="checkbox"><label><input type="checkbox" value="Writing">
                      Writing
                    </label></div>
                  <div class="checkbox"><label><input type="checkbox" value="Speaking">
                      Speaking
                    </label></div>
                  <div class="checkbox"><label><input type="checkbox" value="Math">
                      Math
                    </label></div>
                  <div class="checkbox"><label><input type="checkbox" value="Attention">
                      Attention
                    </label></div>
                  <div class="checkbox"><label><input type="checkbox" value="Memory">
                      Memory
                    </label></div>
                  <div class="checkbox"><label><input type="checkbox" value="Problem Solving">
                      Problem Solving
                    </label></div>
                  <div class="checkbox"><label><input type="checkbox" value="None">
                      None
                    </label></div>
                </div>
                <div class="col-md-12"><strong>In which of the following activities of daily living do you require assistance</strong></div>
                <div class="row pl-1">
                  <div class="checkbox"><label><input type="checkbox" value="Cooking">
                      Cooking
                    </label></div>
                  <div class="checkbox"><label><input type="checkbox" value="Language">
                      Language
                    </label></div>
                  <div class="checkbox"><label><input type="checkbox" value="Dressing">
                      Dressing
                    </label></div>
                  <div class="checkbox"><label><input type="checkbox" value="Phone Calls">
                      Phone Calls
                    </label></div>
                  <div class="checkbox"><label><input type="checkbox" value="Toileting">
                      Toileting
                    </label></div>
                  <div class="checkbox"><label><input type="checkbox" value="Managing Appointments">
                      Managing Appointments
                    </label></div>
                  <div class="checkbox"><label><input type="checkbox" value="Telling Time">
                      Telling Time
                    </label></div>
                  <div class="checkbox"><label><input type="checkbox" value="Transportation/Driving">
                      Transportation/Driving
                    </label></div>
                  <div class="checkbox"><label><input type="checkbox" value="Walking">
                      Walking
                    </label></div>
                  <div class="checkbox"><label><input type="checkbox" value="Showering/Personal Hygiene">
                      Showering/Personal Hygiene
                    </label></div>
                  <div class="checkbox"><label><input type="checkbox" value="Grocery Shopping">
                      Grocery Shopping
                    </label></div>
                  <div class="checkbox"><label><input type="checkbox" value="None">
                      None
                    </label></div>
                </div>
                <div class="col-md-12">
                  <grammarly-extension style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="_1KJtL"></grammarly-extension><strong>What are your speech/language goals/expectations for therapy</strong>
                  <div class="form-group"><textarea maxlength="500" class="form-control" spellcheck="false"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                </div>
                <hr>
                <div class="col-md-12 text-center"><button type="submit" class="btn btn-primary btn-sm mb-2">save</button></div>
              </form>
            </div>
          </div>
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
        </div>
        <div id="Articulation" class="tabcontent">
          <!---->
          <div class="content-two">
            <div class="card">
              <div class="card-header bg-header font-weight-bold">
                Articulation
              </div>
              <form autocomplete="off" class="card-body bg-blue p-0">
                <div class="row mt-1">
                  <div class="checkbox"><label><input type="checkbox">
                      Within Normal Limits
                    </label></div>
                </div>
                <div class="row">
                  <div class="col-md-3"><strong>Sound Production Patterns</strong>
                    <div class="row">
                      <div class="checkbox"><label><input type="checkbox" value="Substitutions">
                          Substitutions
                        </label></div>
                      <div class="checkbox"><label><input type="checkbox" value="Omissions">
                          Omissions
                        </label></div> <br>
                      <div class="checkbox"><label><input type="checkbox" value="Distortions">
                          Distortions
                        </label></div>
                    </div>
                  </div>
                  <div class="col-md-9"><strong>Explain sound production patterns</strong>
                    <div class="form-group"><input type="text" style="width: 100%;"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3"><strong>Apraxia</strong>
                    <div class="row">
                      <div class="col-md-3 pr-1 pl-0">
                        <div class="form-group"><select id="apra_option" class="form-control pl-1 pr-0" onchange="changeStatus9()">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-9 pl-0 pr-0">
                        <div style="visibility:hidden;" id="apra_text" class="col-md-9 pl-0 pr-0">
                          <input type="text" name="" maxlength="200" class="form-control">
                          <span class="badge badge-secondry float-right">0/200</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3"><strong>Dysarthia</strong>
                    <div class="row">
                      <div class="col-md-3 pr-1 pl-0">
                        <div class="form-group"><select id="dysa_option" class="form-control pl-1 pr-0" onchange="changeStatus10()">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div style="visibility:hidden;" id="dysa_text" class="col-md-9 pl-0 pr-0">
                        <div class="form-group">
                          <input type="text" required="required" name="" maxlength="200" class="form-control">
                          <span class="badge badge-secondry float-right">0/200</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3"><strong>Disturbance Of Prosody</strong>
                    <div class="row">
                      <div class="col-md-3 pr-1 pl-0">
                        <div class="form-group"><select id="dis_option" class="form-control pl-1 pr-0" onchange="changeStatus11()">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div style="visibility:hidden;" id="dis_text" class="col-md-9 pl-0 pr-0">
                        <div class="form-group">
                          <input type="text" required="required" name="" maxlength="200" class="form-control">
                          <span class="badge badge-secondry float-right">0/200</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3"><strong>Stimulability</strong>
                    <div class="row">
                      <div class="col-md-3 pr-1 pl-0">
                        <div class="form-group"><select id="stim_option" class="form-control pl-1 pr-0" onchange="changeStatus12()">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div style="visibility:hidden;" id="stim_text" class="col-md-9 pl-0 pr-0">
                        <div class="form-group">
                          <input type="text" required="required" name="" maxlength="200" class="form-control">
                          <span class="badge badge-secondry float-right">0/200</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2"><strong>Intelligibility</strong>
                    <div class="form-group"><select class="form-control">
                        <option disabled="disabled" value="">--SELECT--</option>
                        <option value="select_context">Select Context</option>
                        <option value="context_known">Context known</option>
                        <option value="context_unknown">Context Unknown</option>
                      </select></div>
                  </div>
                  <div class="col-md-2"><strong>Select Listener</strong>
                    <div class="form-group"><select class="form-control">
                        <option disabled="disabled" value="">--SELECT--</option>
                        <option value="select_listener">Select Listener</option>
                        <option value="familiar_listener">Familiar Listener</option>
                        <option value="unfamiliar_listener">Unfamiliar Listener</option>
                      </select></div>
                  </div>
                  <div class="col-md-2"><strong>Percent</strong>
                    <div class="form-group"><input type="text" class="form-control"></div>
                  </div>
                  <div class="col-md-3"><strong>Oral Motor Examination</strong>
                    <div class="form-group"><select id="oral_option" class="form-control pl-1 pr-0" onchange="changeStatus13()">
                        <option value="Within Normal Limit">Within Normal Limit</option>
                        <option value="Cutficultes">Cutficultes</option>
                      </select></div>
                  </div>
                  <div style="visibility:hidden;" id="oral_text" class="col-md-3"><strong>Explain Oral Motor Examination</strong>
                    <div class="form-group">
                      <textarea required="required" name="" maxlength="200" class="form-control"></textarea>
                      <span class="badge badge-secondry float-right">0/200</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-12"><strong>Types of phonological processes</strong></div>
                <div class="row">
                  <div class="col-md-9">
                    <div class="row">
                      <div class="checkbox"><label><input type="checkbox" value="Backing">
                          Backing
                        </label></div>
                      <div class="checkbox"><label><input type="checkbox" value="Fronting">
                          Fronting
                        </label></div>
                      <div class="checkbox"><label><input type="checkbox" value="Stopping">
                          Stopping
                        </label></div>
                      <div class="checkbox"><label><input type="checkbox" value="Initial Consonant Deletion">
                          Initial Consonant Deletion
                        </label></div>
                      <div class="checkbox"><label><input type="checkbox" value="Final Consonant Deletion">
                          Final Consonant Deletion
                        </label></div>
                      <div class="checkbox"><label><input type="checkbox" value="Cluster Reduction">
                          Cluster Reduction
                        </label></div>
                        <input id="other_option_art" class="maxtickets_enable_cb" name="opwp_wootickets[tickets][2][enable]" type="checkbox" style="height: 25px;"> Other
                      <div class="max_tickets" class="form-group">
                        <input id="other_text_art" name="opwp_wootickets[tickets][2][maxtickets]" type="text" required="required" class="form-control">
                      </div>
                    </div>
                  </div>
                  <!---->
                </div>
                <div class="col-md-12"><strong>Results</strong><br>
                  <div class="form-group"><textarea maxlength="500" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                </div>
                <hr>
                <div class="col-md-12 text-center"><button type="submit" class="btn btn-primary btn-sm mb-2">save</button></div>
              </form>
            </div>
          </div>
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
        </div>
        <div id="Receptive" class="tabcontent">
          <div class="content-three">
            <div class="card">
              <div class="card-header bg-header font-weight-bold">
                Receptive Language
              </div>
              <form id="RcpForm" autocomplete="off" class="card-body bg-blue p-0">
                <div class="row mt-1">
                  <div class="checkbox"><label><input id="limit" name="limit" type="checkbox">
                      Within Normal Limits
                    </label></div>
                </div>
                <div class="row">
                  <div class="col-md-3"><strong for="follow_dir">Following Direction</strong>
                    <div class="form-group"><select id="follow_dir" class="form-control">
                        <option value="">--SELECT--</option>
                        <option value="one_step">One Step</option>
                        <option value="two_step">Two Step</option>
                        <option value="three_step">Three Step</option>
                      </select></div>
                  </div>
                  <div class="col-md-3"><strong for="repeat_no">Repeating Number</strong>
                    <div class="form-group"><select id="repeat_no" class="form-control">
                        <option value="">--SELECT--</option>
                        <option value="1_Digit">1 Digit</option>
                        <option value="2_Digit">2 Digit</option>
                        <option value="3_Digit">3 Digit</option>
                        <option value="4_Digit">4 Digit</option>
                        <option value="5_Digit">5 Digit</option>
                      </select></div>
                  </div>
                  <div class="col-md-6"><strong for="repeatsentence">Repeating Sentences </strong>
                    <div class="form-group"><textarea type="repeat_sentence" id="repeatsentence" maxlength="500" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6"><strong for="listen_para">Listening to Short Paragraphs and Retail </strong>
                    <div class="form-group"><textarea type="text" id="listen_para" maxlength="500" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                  </div>
                  <div class="col-md-6"><strong for="compre_para">Comprehension of Paragraphs (Listen and Answer Questions) </strong>
                    <div class="form-group"><textarea type="text" id="compre_para" maxlength="500" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6"><strong for="read_compre">Reading Comprehension</strong>
                    <div class="form-group"><textarea type="text" id="read_compre" name="read_compre" maxlength="500" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                  </div>
                  <div class="col-md-6"><strong for="result">Result</strong>
                    <div class="form-group"><textarea type="text" id="result" name="result" maxlength="500" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                  </div>
                </div>
                <hr>
                <div class="col-md-12 text-center"><input type="submit" class="btn btn-primary btn-sm mb-2" value="save" name="butsave2" id="butsave2"></input></div>
              </form>
            </div>
          </div>
        </div>
        <div id="Expressive" class="tabcontent">
          <!---->
          <!---->
          <!---->
          <div class="content-four">
            <div class="card">
              <div class="card-header bg-header font-weight-bold">
                Expressive Language
              </div>
              <form autocomplete="off" class="card-body bg-blue p-0">
                <div class="row mt-1">
                  <div class="checkbox"><label><input type="checkbox">
                      Within Normal Limits
                    </label></div>
                </div>
                <div class="col-md-12"><strong for="informal_obser">Informal Observations in Conversation </strong>
                  <div class="form-group"><textarea type="text" id="informal_obser" maxlength="500" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><strong for="naming_category">Naming in categories </strong>
                    <div class="form-group"><textarea type="text" id="naming_category" maxlength="500" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                  </div>
                  <div class="col-md-4"><strong for="categorization">Categorization </strong>
                    <div class="form-group"><textarea type="text" id="categorization" maxlength="500" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                  </div>
                  <div class="col-md-4"><strong for="wrd_find_difficulties">Word Finding Difficulties</strong>
                    <div class="form-group"><textarea type="text" id="wrd_find_difficulties" maxlength="500" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3"><strong for="syntax">Syntax</strong>
                    <div class="form-group"><select id="syntax" class="form-control">
                        <option value="">--SELECT--</option>
                        <option value="non_verbal">Nonverbal</option>
                        <option value="single_word">Single Word</option>
                        <option value="phrases">Phrases</option>
                        <option value="sentences">Sentences</option>
                        <option value="conversation">conversation</option>
                      </select></div>
                  </div>
                  <div class="col-md-3"><strong for="des_syntax">Describe Syntax </strong>
                    <div class="form-group"><input type="text" id="form-control" class="form-control"></div>
                  </div>
                  <div class="col-md-3"><strong for="morphology">Morphology</strong> <select id="morphology" class="form-control">
                      <option value="">--SELECT--</option>
                      <option value="adequate_grammatical_skills">Adequate Grammatical Skills</option>
                      <option value="grammatical_error">Grammatical Error</option>
                    </select></div>
                  <div class="col-md-3"><strong for="morphology">Mean Length Utterance</strong>
                    <div class="form-group"><input type="text" id="" class="form-control"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6"><strong for="pragmatics">Pragmatics <span class="text-danger">*</span></strong>
                    <div class="row">
                      <div class="checkbox"><label><input type="checkbox" value="Topic Maintenance">
                          Topic Maintenance
                        </label></div>
                      <div class="checkbox"><label><input type="checkbox" value="Initial Conversation">
                          Initial Conversation
                        </label></div>
                      <div class="checkbox"><label><input type="checkbox" value="Appropriate Eye Contact">
                          Appropriate Eye Contact
                        </label></div>
                      <div class="checkbox"><label><input type="checkbox" value="Basic Social Language">
                          Basic Social Language
                        </label></div>
                      <div class="checkbox"><label><input type="checkbox" value="Asks Appropriately For Clarification and Repetition">
                          Asks Appropriately For Clarification and Repetition
                        </label></div>
                        <input id="other_option" class="maxtickets_enable_cb" name="opwp_wootickets[tickets][2][enable]" type="checkbox" style="height: 25px;"> Other
                      <div class="max_tickets" class="form-group">
                        <input id="other_text" name="opwp_wootickets[tickets][2][maxtickets]" type="text" required="required" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <grammarly-extension style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="_1KJtL"></grammarly-extension><strong for="explain_pragmatics">Explain Pragmatics</strong>
                    <div class="form-group"><textarea id="explain_pragmatics" maxlength="500" class="form-control" spellcheck="false"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <grammarly-extension style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="_1KJtL"></grammarly-extension><strong for="written_expression">Written Expression</strong>
                    <div class="form-group"><textarea id="written_expression" maxlength="500" class="form-control" spellcheck="false"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                  </div>
                  <div class="col-md-6">
                    <grammarly-extension style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="_1KJtL"></grammarly-extension><strong for="result">Result</strong>
                    <div class="form-group"><textarea id="result" maxlength="500" class="form-control" spellcheck="false"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                  </div>
                </div>
                <hr>
                <div class="col-md-12 text-center"><button type="submit" class="btn btn-primary btn-sm mb-2">Save</button></div>
              </form>
            </div>
          </div>
          <!---->
          <!---->
          <!---->
          <!---->
        </div>
        <div id="Fluency" class="tabcontent">
          <!---->
          <!---->
          <!---->
          <!---->
          <div class="content-four">
            <div class="card">
              <div class="card-header bg-header font-weight-bold">
                Expressive Language
              </div>
              <form autocomplete="off" class="card-body bg-blue p-0">
                <div class="row mt-1">
                  <div class="checkbox"><label><input type="checkbox">
                      Within Normal Limits
                    </label></div>
                </div>
                <div class="row">
                  <div class="col-md-6"><strong for="dysfluencies">Dysfluencies</strong> <select id="dysf_option" class="form-control" onchange="changeStatus13()">
                      <option value="Within Normal Limits">Within Normal Limits</option>
                      <option value="Mid">Mid</option>
                      <option value="Moderate">Moderate</option>
                      <option value="Several">Several</option>
                    </select></div>
                  <div  class="col-md-6">
                    <div style="visibility:hidden;" id="dysf_text" class="row">
                      Types of Dysfluencies
                      <div class="checkbox"><label><input type="checkbox" value="Phrase Repetitions">
                          Phrase Repetitions
                        </label></div>
                      <div class="checkbox"><label><input type="checkbox" value="Sound Repetitions">
                          Sound Repetitions
                        </label></div>
                      <div class="checkbox"><label><input type="checkbox" value="Single-Word Repetitions">
                          Single-Word Repetitions
                        </label></div>
                      <div class="checkbox"><label><input type="checkbox" value="Fillers/Interjections">
                          Fillers/Interjections
                        </label></div>
                      <div class="checkbox"><label><input type="checkbox" value="Prolongations">
                          Prolongations
                        </label></div>
                      <div class="checkbox"><label><input type="checkbox" value="Blocks">
                          Blocks
                        </label></div>
                      <div class="checkbox"><label><input type="checkbox" value="Part-Word Repetitions">
                          Part-Word Repetitions
                        </label></div>
                      <div class="checkbox"><label><input type="checkbox" value="Revisions">
                          Revisions
                        </label></div>
                      <div class="checkbox"><label><input type="checkbox" value="Not Finishing Word">
                          Not Finishing Word
                        </label></div>
                    </div>
                  </div>
                  <div class="col-md-6"><strong for="sec_mannerism">Secondary Mannerisms/Physical movements</strong>
                    <div class="row">
                      <div class="col-md-2 pr-1 pl-0">
                        <div class="form-group"><select id="secon_option" class="form-control" onchange="changeStatus14()">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-10 pl-0 pr-0">
                        <div style="visibility:hidden;" id="secon_text" class="form-group"><input type="text" required="required" name="" maxlength="200" class="form-control"> <span class="badge badge-secondry float-right">0/200</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <grammarly-extension style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="_1KJtL"></grammarly-extension><strong>Result</strong>
                    <div class="form-group"><textarea id="result" maxlength="500" class="form-control" spellcheck="false"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                  </div>
                </div>
                <hr>
                <div class="col-md-12 text-center"><button type="submit" class="btn btn-primary btn-sm mb-2">save</button></div>
              </form>
            </div>
          </div>
          <!---->
          <!---->
          <!---->
        </div>
        <div id="Voice" class="tabcontent">
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
          <div class="content-four">
            <div class="card">
              <div class="card-header bg-header font-weight-bold">
                Voice
              </div>
              <form autocomplete="off" class="card-body bg-blue p-0">
                <div class="row mt-1">
                  <div class="checkbox"><label><input type="checkbox">
                      Within Normal Limits
                    </label></div>
                </div>
                <div class="col-md-12"><strong>Are the following areas of voice found to be a typical?</strong></div>
                <div class="row">
                  <div class="col-md-3"><strong>Volume</strong>
                    <div class="row">
                      <div class="col-md-4 pl-0">
                        <div class="form-group"><select id="vol_option" class="form-control" onchange="changeStatus15()">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-8 pl-0">
                        <div style="visibility:hidden;" id="vol_text" class="form-group "><input type="text" maxlength="200" required="required" class="form-control"> <span class="badge badge-secondry float-right">0/200</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3"><strong>Quality</strong>
                    <div class="row">
                      <div class="col-md-4 pl-0">
                        <div class="form-group"><select id="Qual_option" class="form-control" onchange="changeStatus16()">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-8 pl-0">
                        <div style="visibility:hidden;" id="Qual_text" class="form-group "><input type="text" maxlength="200" required="required" class="form-control"> <span class="badge badge-secondry float-right">0/200</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3"><strong>Resonance</strong>
                    <div class="row">
                      <div class="col-md-4 pl-0">
                        <div class="form-group"><select id="reso_option" class="form-control" onchange="changeStatus17()">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-8 pl-0">
                        <div style="visibility:hidden;" id="reso_text" class="form-group "><input type="text" maxlength="200" required="required" class="form-control"> <span class="badge badge-secondry float-right">0/200</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3"><strong>Pitch</strong>
                    <div class="row">
                      <div class="col-md-4 pl-0">
                        <div class="form-group"><select id="pit_option" class="form-control" onchange="changeStatus18()">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-8 pl-0">
                        <div style="visibility:hidden;" id="pit_text" class="form-group "><input type="text" maxlength="200" required="required" class="form-control"> <span class="badge badge-secondry float-right">0/200</span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <grammarly-extension style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="_1KJtL"></grammarly-extension><strong for="behavioural_com">Behavioural Components</strong> <textarea type="text"
                      id="behavioural_com" maxlength="500" class="form-control" spellcheck="false"></textarea> <span class="badge badge-secondry float-right">0/500</span>
                  </div>
                  <div class="col-md-6">
                    <grammarly-extension style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="_1KJtL"></grammarly-extension><strong for="result">Result</strong> <textarea type="text" id="result" maxlength="500"
                      class="form-control" spellcheck="false"></textarea> <span class="badge badge-secondry float-right">0/500</span>
                  </div>
                </div>
                <hr>
                <div class="col-md-12 text-center"><button type="submit" class="btn btn-primary btn-sm mb-2">save</button></div>
              </form>
            </div>
          </div>
          <!---->
          <!---->
        </div>
        <div id="POC" class="tabcontent">
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
          <div class="content-four">
            <div class="card">
              <div class="card-header bg-header font-weight-bold">
                POC
              </div>
              <form autocomplete="off" class="card-body bg-blue p-0">
                <div class="col-md-12"><strong for="diagnosis">Diagnosis</strong>
                  <div class="form-group"><select id="diagnosis" required="required" class="form-control">
                      <option value="F80_9(Developmental_disorder_of_speech_and_language)">F80.9(Developmental disorder of speech and language)</option>
                      <option value="F84_0(Autistic_Disorder)">F84.0(Autistic Disorder)</option>
                      <option value="f80_0(phonological_disorder)">F80.0(Phonological Disorder)</option>
                      <option value="f40_1(expressive_language_disorder)">F40.1(Expressive Language Disorder)</option>
                      <option value="f47_9(speech_distrubances)">F47.9(Speech Distrubances)</option>
                    </select></div>
                </div>
                <div class="row">
                  <div class="col-md-9"><strong for="area_need">Areas of need</strong>
                    <div class="row">
                      <div class="checkbox"><label><input type="checkbox" value="ST Not Indicated" onchange="myFunction()" id="st_option">
                          ST Not Indicated
                        </label></div>
                      <div class="checkbox"><label><input type="checkbox" value="Articulation/Phonology">
                          Articulation/Phonology
                        </label></div>
                      <div class="checkbox"><label><input type="checkbox" value="Receptive Language">
                          Receptive Language
                        </label></div>
                      <div class="checkbox"><label><input type="checkbox" value="Expressive Language">
                          Expressive Language
                        </label></div>
                      <div class="checkbox"><label><input type="checkbox" value="Fluency">
                          Fluency
                        </label></div>
                      <div class="checkbox"><label><input type="checkbox" value="Voice">
                          Voice
                        </label></div>
                    </div>
                  </div>
                  <div class="col-md-3"><strong for="prognosis">Prognosis </strong>
                    <div class="form-group"><select class="form-control">
                        <option value="">--SELECT--</option>
                        <option value="Good">Good</option>
                        <option value="Far">Far</option>
                        <option value="Poor">Poor</option>
                      </select></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4" id="freq_option"><strong for="frequency">Frequency </strong>
                    <div class="form-group"><select class="form-control">
                        <option value="">--SELECT--</option>
                        <option value="1_times">1 Times</option>
                        <option value="2_times">2 Times</option>
                        <option value="3_times">3 Times</option>
                        <option value="4_times">4 Times</option>
                        <option value="5_times">5 Times</option>
                        <option value="6_times">6 Times</option>
                        <option value="7_times">7 Times</option>
                      </select></div>
                  </div>
                  <div class="col-md-4" id="week_option"><strong for="per_week_for">Per Week for</strong>
                    <div class="form-group"><select class="form-control">
                        <option value="">--SELECT--</option>
                        <option value="1_weeks">1 weeks</option>
                        <option value="2_weeks">2 weeks</option>
                        <option value="3_weeks">3 weeks</option>
                        <option value="4_weeks">4 weeks</option>
                        <option value="5_weeks">5 weeks</option>
                        <option value="6_weeks">6 weeks</option>
                        <option value="7_weeks">7 weeks</option>
                        <option value="8_weeks">8 weeks</option>
                        <option value="9_weeks">9 weeks</option>
                        <option value="10_weeks">10 weeks</option>
                        <option value="11_weeks">11 weeks</option>
                        <option value="12_weeks">12 weeks</option>
                      </select></div>
                  </div>
                  <div class="col-md-4"><strong for="plan_care_discussed">This Plan of Care was Discussed with the </strong>
                    <div class="form-group"><select id="plan_care_discussed" class="form-control">
                        <option value="">--SELECT--</option>
                        <option value="Client">Client</option>
                        <option value="Parent">Parent</option>
                        <option value="Caretaker">CareTaker</option>
                      </select></div>
                  </div>
                  <div class="col-md-4"><strong for="data_of_service">Date of Service <span class="text-danger">*</span></strong>
                    <div>
                      <div>
                        <input type="date" name="dateofbirth" id="dateofbirth">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4"><strong for="from_time">Time From</strong>
                    <div class="form-group"><input type="time" id="from_time" class="form-control"></div>
                  </div>
                  <div class="col-md-4"><strong for="to_time">To TimeZone:PST</strong>
                    <div class="form-group"><input type="time" id="to_time" class="form-control"></div>
                  </div>
                </div>
                <div class="col-md-12"><strong for="summ_recom">Summary and Recommendations</strong>
                  <div class="form-group"><textarea id="summ_recom" maxlength="500" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                </div>
                <hr>
                <div class="col-md-12 text-center tab-pane">
                  <button type="submit" class="btn btn-primary btnNext mb-2">save</button></div>
              </form>
            </div>
          </div>
          <!---->
        </div>
        <div id="Goals" class="tabcontent">
          <div class="content-four">
            <div class="card">
              <div class="card-header bg-header font-weight-bold">
                Goals - Must have atleast 2 Goals
              </div>
              <form id="fupForm" autocomplete="off" class="card-body bg-blue p-0">
                <div class="row">
                  <div class="col-md-6"><strong for="goal_1">Goal 1 <span class="text-danger">*</span></strong>
                    <div class="form-group"><textarea type="text" id="goal_1" name="goal_1" required="required" maxlength="300" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/300</span></div>
                  </div>
                  <div class="col-md-6"><strong for="goal_2">Goal 2 <span class="text-danger">*</span></strong>
                    <div class="form-group"><textarea type="text" id="goal_2" name="goal_2" required="required" maxlength="300" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/300</span></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6"><strong for="goal_3">Goal 3</strong>
                    <div class="form-group"><textarea type="text" id="goal_3" name="goal_3" maxlength="300" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/300</span></div>
                  </div>
                  <div class="col-md-6"><strong for="goal_4">Goal 4</strong>
                    <!-- <grammarly-extension style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="_1KJtL"></grammarly-extension> -->
                    <div class="form-group"><textarea type="text" id="goal_4" name="goal_4"  maxlength="300" class="form-control" spellcheck="false"></textarea> <span class="badge badge-secondry float-right">0/300</span></div>
                  </div>
                </div>
                <div class="col-md-6"><strong for="goal_5">Goal 5</strong>
                  <div class="form-group"><textarea type="text" id="goal_5" name="goal_5" maxlength="300" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/300</span></div>
                </div>
                <hr>
                <div class="row text-center">
                  <div class="col-md-6 text-center tab-pane"><a type="submit" class="btn btn-primary mb-2 btnNext" value="Save" name="butsave1" id="butsave1" ></a></div>
                  <div class="col-md-6 text-center">
                    <form action="http://careaba.com/careABA_C1/clinic_note/assets/php/CaseHistoryAdult/exportpdf.php" method="POST"><input type="hidden" name="lock_date" id="lock_date" value="08/10/2020"> <input type="submit"
                        class="btn btn-success btn-sm mb-2"   name="butsave" id="butsave" value="sign &amp; lock"></input></form>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  <script>
  $('input.maxtickets_enable_cb').change(function(){
          if ($(this).is(':checked')) $(this).next('div.max_tickets').show();
          else $('div.max_tickets').hide();
      }).change();
    //   $('input.st').click(function(){
    //     var checked = $(this).is(':checked');
    //     if(checked) {
    //         if(!confirm('Are you sure you want to resume use of this program?')){
    //           document.getElementById("week_option").style.visibility="hidden";
    //             $(this).removeAttr('checked');
    //
    //         }
    //     } else if(!confirm('Are you sure you want to discontinue this program?')){
    //         $(this).attr("checked", "checked");
    //         document.getElementById("week_option").style.visibility="";
    //
    //     }
    // });
  let goals1 = [];
  document.addEventListener('DOMContentLoaded',()=> {
    document.getElementById('butsave2').addEventListener('click',addData1);
  });
    const addData1 = (d) =>{
      d.preventDefault();
      let datas1 = {
          limit : document.getElementById("limit").value,
          follow_dir : document.getElementById("follow_dir").value,
          repeat_no : document.getElementById("repeat_no").value,
          repeatsentence : document.getElementById("repeatsentence").value,
          result : document.getElementById("result").value,
          listen_para : document.getElementById("listen_para").value,
          compre_para : document.getElementById("compre_para").value,
          read_compre : document.getElementById("read_compre").value


      };
      goals1.push(datas1);
      var finaldata1 = JSON.stringify(goals1);
      $.ajax({
          url :"save2.php",
          type: "POST",
          data: {
                  finaldata1 : finaldata1
          },
          success: function(data) {
                     alert("success");
                  }
      });
    }
    let goals = [];
    document.addEventListener('DOMContentLoaded',()=> {
      document.getElementById('butsave1').addEventListener('click',addData);
    });

    const addData = (c) =>{
      c.preventDefault();
      let datas = {
          goal_1 : document.getElementById("goal_1").value,
          goal_2 : document.getElementById("goal_2").value,
          goal_3 : document.getElementById("goal_3").value,
          goal_4 : document.getElementById("goal_4").value,
          goal_5 : document.getElementById("goal_5").value
      };
      goals.push(datas);
      var finaldata = JSON.stringify(goals);
      $.ajax({
          url :"save2.php",
          type: "POST",
          data: {
                  finaldata : finaldata
          },
          success: function(data) {
                     alert("success");
                  }
      });
    }

    function changeStatus() {
      var status = document.getElementById("eating");
      if(status.value == "Yes") {
        document.getElementById("eatingtext").style.visibility="";
      }
      else {
        document.getElementById("eatingtext").style.visibility="hidden";
      }
    }
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    document.getElementById("defaultOpen").click();

  </script>

</body>
<!-- <grammarly-extension class="_1KJtL"></grammarly-extension> -->

</html>
