<?php

Class Tournament
{
    protected $id;
    protected $name;
    protected $tournament_type;
    protected $url;
    protected $subdomain;
    protected $description;
    protected $open_signup;
    protected $hold_third_place_match;
    protected $pts_for_match_win;
    protected $pts_for_match_tie;
    protected $pts_for_game_win;
    protected $pts_for_game_tie;
    protected $pts_for_bye;
    protected $swiss_rounds;
    protected $ranked_by;
    protected $rr_pts_for_match_win;
    protected $rr_pts_for_match_tie;
    protected $rr_pts_for_game_win;
    protected $rr_pts_for_game_tie;
    protected $accept_attachments;
    protected $hide_forum;
    protected $show_rounds;
    protected $private;
    protected $notify_users_when_matches_open;
    protected $notify_users_when_the_tournament_ends;
    protected $sequential_pairings;
    protected $signup_cap;
    protected $start_at;
    protected $check_in_duration;
    protected $grand_finals_modifier;

    public function __construct($args)
    {
        $this->id = $args['id'];
        $this->name = $args['name'];
        $this->tournament_type = $args['tournament_type'];
        $this->url = $args['url'];
        $this->subdomain = $args['subdomain'];
        $this->description = $args['description'];
        $this->open_signup = $args['open_signup'];
        $this->hold_third_place_match = $args['hold_third_place_match'];
        $this->pts_for_match_win = $args['pts_for_match_win'];
        $this->pts_for_match_tie = $args['pts_for_match_tie'];
        $this->pts_for_game_win = $args['pts_for_game_win'];
        $this->pts_for_game_tie = $args['pts_for_game_tie'];
        $this->pts_for_bye = $args['pts_for_bye'];
        $this->swiss_rounds = $args['swiss_rounds'];
        $this->ranked_by = $args['ranked_by'];
        $this->rr_pts_for_match_win = $args['rr_pts_for_match_win'];
        $this->rr_pts_for_match_tie = $args['rr_pts_for_match_tie'];
        $this->rr_pts_for_game_win = $args['rr_pts_for_game_win'];
        $this->rr_pts_for_game_tie = $args['rr_pts_for_game_tie'];
        $this->accept_attachments = $args['accept_attachments'];
        $this->hide_forum = $args['hide_forum'];
        $this->show_rounds = $args['show_rounds'];
        $this->private = $args['private'];
        $this->notify_users_when_matches_open = $args['notify_users_when_matches_open'];
        $this->notify_users_when_the_tournament_ends = $args['notify_users_when_the_tournament_ends'];
        $this->sequential_pairings = $args['sequential_pairings'];
        $this->signup_cap = $args['signup_cap'];
        $this->start_at = $args['start_at'];
        $this->check_in_duration = $args['check_in_duration'];
        $this->grand_finals_modifier = $args['grand_finals_modifier'];
    }

     public function getId(){ return $this->id; }
     public function setId($id){ $this->id = $id; }
     public function getName(){ return $this->name; }
     public function setName($name){ $this->name = $name; }
     public function getTournament_type(){ return $this->tournament_type; }
     public function setTournament_type($tournament_type){ $this->tournament_type = $tournament_type; }
     public function getUrl(){ return $this->url; }
     public function setUrl($url){ $this->url = $url; }
     public function getSubdomain(){ return $this->subdomain; }
     public function setSubdomain($subdomain){ $this->subdomain = $subdomain; }
     public function getDescription(){ return $this->description; }
     public function setDescription($description){ $this->description = $description; }
     public function getOpen_signup(){ return $this->open_signup; }
     public function setOpen_signup($open_signup){ $this->open_signup = $open_signup; }
     public function getHold_third_place_match(){ return $this->hold_third_place_match; }
     public function setHold_third_place_match($hold_third_place_match){ $this->hold_third_place_match = $hold_third_place_match; }
     public function getPts_for_match_win(){ return $this->pts_for_match_win; }
     public function setPts_for_match_win($pts_for_match_win){ $this->pts_for_match_win = $pts_for_match_win; }
     public function getPts_for_match_tie(){ return $this->pts_for_match_tie; }
     public function setPts_for_match_tie($pts_for_match_tie){ $this->pts_for_match_tie = $pts_for_match_tie; }
     public function getPts_for_game_win(){ return $this->pts_for_game_win; }
     public function setPts_for_game_win($pts_for_game_win){ $this->pts_for_game_win = $pts_for_game_win; }
     public function getPts_for_game_tie(){ return $this->pts_for_game_tie; }
     public function setPts_for_game_tie($pts_for_game_tie){ $this->pts_for_game_tie = $pts_for_game_tie; }
     public function getPts_for_bye(){ return $this->pts_for_bye; }
     public function setPts_for_bye($pts_for_bye){ $this->pts_for_bye = $pts_for_bye; }
     public function getSwiss_rounds(){ return $this->swiss_rounds; }
     public function setSwiss_rounds($swiss_rounds){ $this->swiss_rounds = $swiss_rounds; }
     public function getRanked_by(){ return $this->ranked_by; }
     public function setRanked_by($ranked_by){ $this->ranked_by = $ranked_by; }
     public function getRr_pts_for_match_win(){ return $this->rr_pts_for_match_win; }
     public function setRr_pts_for_match_win($rr_pts_for_match_win){ $this->rr_pts_for_match_win = $rr_pts_for_match_win; }
     public function getRr_pts_for_match_tie(){ return $this->rr_pts_for_match_tie; }
     public function setRr_pts_for_match_tie($rr_pts_for_match_tie){ $this->rr_pts_for_match_tie = $rr_pts_for_match_tie; }
     public function getRr_pts_for_game_win(){ return $this->rr_pts_for_game_win; }
     public function setRr_pts_for_game_win($rr_pts_for_game_win){ $this->rr_pts_for_game_win = $rr_pts_for_game_win; }
     public function getRr_pts_for_game_tie(){ return $this->rr_pts_for_game_tie; }
     public function setRr_pts_for_game_tie($rr_pts_for_game_tie){ $this->rr_pts_for_game_tie = $rr_pts_for_game_tie; }
     public function getAccept_attachments(){ return $this->accept_attachments; }
     public function setAccept_attachments($accept_attachments){ $this->accept_attachments = $accept_attachments; }
     public function getHide_forum(){ return $this->hide_forum; }
     public function setHide_forum($hide_forum){ $this->hide_forum = $hide_forum; }
     public function getShow_rounds(){ return $this->show_rounds; }
     public function setShow_rounds($show_rounds){ $this->show_rounds = $show_rounds; }
     public function getPrivate(){ return $this->private; }
     public function setPrivate($private){ $this->private = $private; }
     public function getNotify_users_when_matches_open(){ return $this->notify_users_when_matches_open; }
     public function setNotify_users_when_matches_open($notify_users_when_matches_open){ $this->notify_users_when_matches_open = $notify_users_when_matches_open; }
     public function getNotify_users_when_the_tournament_ends(){ return $this->notify_users_when_the_tournament_ends; }
     public function setNotify_users_when_the_tournament_ends($notify_users_when_the_tournament_ends){ $this->notify_users_when_the_tournament_ends = $notify_users_when_the_tournament_ends; }
     public function getSequential_pairings(){ return $this->sequential_pairings; }
     public function setSequential_pairings($sequential_pairings){ $this->sequential_pairings = $sequential_pairings; }
     public function getSignup_cap(){ return $this->signup_cap; }
     public function setSignup_cap($signup_cap){ $this->signup_cap = $signup_cap; }
     public function getStart_at(){ return $this->start_at; }
     public function setStart_at($start_at){ $this->start_at = $start_at; }
     public function getCheck_in_duration(){ return $this->check_in_duration; }
     public function setCheck_in_duration($check_in_duration){ $this->check_in_duration = $check_in_duration; }
     public function getGrand_finals_modifier(){ return $this->grand_finals_modifier; }
     public function setGrand_finals_modifier($grand_finals_modifier){ $this->grand_finals_modifier = $grand_finals_modifier; }

}

?>
