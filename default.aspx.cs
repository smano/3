using System;
using System.Collections;
using System.Configuration;
using System.Data;
using System.Linq;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.HtmlControls;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Xml.Linq;
using System.Drawing;
using System.Data.SqlClient;
using System.Net;
using System.Text;
using System.IO;

public partial class home : System.Web.UI.Page
{ 
    SqlConnection conn=new SqlConnection();
    SqlCommand cmd,cmd1,cmd2,cmd3;
    SqlDataAdapter ad,ad1,ad2;
    DataSet ds,ds1,ds2;
    protected void Page_Load(object sender, EventArgs e)
    {
       if (Request.Cookies["like_cookie"] == null)
        {
            HttpCookie likecookie = new HttpCookie("like_cookie");
            likecookie.Value = "yes";
            likecookie.Expires = DateTime.Now.AddDays(1);
            Response.Cookies.Add(likecookie);
            ModalPopupExtender1.Show();
        }


       // if (Request.QueryString.Count > 0 && Request.QueryString.GetKey(0).ToString() == "movie")
        //{  }
        //else { Response.Write("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\"><link rel=icon href=favicon.ico /><div align=center id=overlay style='position:absolute;left:400px;top:260px;font-size:16px;'><img width='450px' height='90px' src=images/loading.gif alt=Wait.. /><br /><br/>Loading ......<br/> </div>"); Response.Flush(); }
        int querycheck = 0;
        Session["m"] = ""; Session["opensub"] = "";
        if (Session["language"] == null)
        { Session["language"] = "All Languages"; }
        conn.ConnectionString = ConfigurationManager.ConnectionStrings["subtitleConnectionString"].ConnectionString;
        conn.Open();
        cmd = new SqlCommand();
        ad = new SqlDataAdapter();
        ds = new DataSet();
        cmd.Connection = conn;
        cmd.CommandText = "Select * From queries order by id desc";
        ad.SelectCommand = cmd;
        ad.Fill(ds, "queries");
        string st = ""; int ij;
        int ijk = ds.Tables["queries"].Rows.Count;
        if (ijk > 60) { ijk = 60; }
        for (ij = 0; ij < ijk; ij++)
        {
            string st1 = ds.Tables["queries"].Rows[ij]["query"].ToString(); st1 = st1.Replace(" ", "-");
            st += "<div style=padding-left:10px;>";
            st += "<a  class=font style=font-weight:normal;> " + ds.Tables["queries"].Rows[ij]["query"].ToString() + "  subtitles</a>";
            st += "</div>";
        }
        latest.InnerHtml = st;
        if (Request.QueryString.Count == 0 || Request.QueryString.GetKey(0).ToString() == "aspxerrorpath")
        {
            HtmlMeta meta = new HtmlMeta();
            meta.Name = "description";
            meta.Content = "Best Subtitle Search Engine.No Need to search every site.Search and Download subtitles for movies in all languages from all subtitle sites.See Popular subtitles and download subtitles for latest movies.Filter subtitles by language.";
            MetaPlaceHolder.Controls.Add(meta);
            meta = new HtmlMeta();
            string keyword="";
            keyword += "Download Subtitles,Download movie subtitles,subtitle search engine,subtitle hub, subtitlehub,subtitles download,download subtitles for movies,english subtitles";
            meta.Name = "keyword";
            meta.Content = keyword;
            MetaPlaceHolder.Controls.Add(meta);
        }
        if (Request.QueryString.Count > 0 && Request.QueryString.GetKey(0).ToString() == "aspxerrorpath")
        {
            string str = "";
            str += "<div align=center><br/><a style=color:#148394;font-size:15px; href='http://subtitlehub.com/support'>(Report this error)</a>  or</div>";
            str += "<div align=center style=font-size:15px;color:red;>An Error has occured in loading the page you are requesting.Please try again.<br/></div>";
            search.InnerHtml = str;
            search.Visible = true;
        }
        if (Request.QueryString.Count > 0 && Request.QueryString.GetKey(0).ToString() == "search")
        {
            Page.Title = "Search Subtitles";
            HtmlMeta meta = new HtmlMeta();
            meta.Name = "description";
            meta.Content = "Search subtitles for TV series and movies.Download subtitles for latest movies.";
            MetaPlaceHolder.Controls.Add(meta);
            meta = new HtmlMeta();
            string keyword = "";
            keyword += "Download Subtitles,Download movie subtitles,subtitle hub, subtitlehub,subtitles download,download subtitles for movies,english subtitles";
            meta.Name = "keyword";
            meta.Content = keyword;
            MetaPlaceHolder.Controls.Add(meta);
            string str = "";
            str += "<h3 style=color:#555555;font-size:20px;>Search Results :</h3>";
            str += "<div align=center style=font-size:16px;color:red;><b>Please Enter Movie Name. </b><b style='font-weight:normal;font-size:12px;'>(Do Not Enter Special Characaters.)</b></div>";
            search.Visible = true;
            search.InnerHtml = str;
        }
        if (Request.QueryString.Count > 0 && Request.QueryString.GetKey(0).ToString() == "movie")
        {
            string reqmovie = Request.QueryString["movie"].ToString().Replace("subtitles","");
            //reqmovie = eliminateyear(reqmovie);
            reqmovie = reqmovie.Replace("subtitle","");
            string chars = "~`!@#$^&*_={}\';:/?><,\"";
            int kk = 0;
            for (int ch = 0; ch < 22; ch++)
            { if (reqmovie.Contains(chars[ch].ToString()) == true) { kk = 1; } }
            if (reqmovie.Contains("|") == true || reqmovie.Contains(".") == true) { kk = 1; }
            if (reqmovie != "" &&  kk==0)
            {
                string txtbx = firstlettercapital(Request.QueryString["movie"].ToString());
                //string txtbx1 = eliminateyear(txtbx);
                string txtbx1 = txtbx;
                txtbx = txtbx.Replace("-", " ");
                txtbx1 = txtbx1.Replace("-", " ").Replace("subtitles", "");
                if (txtbx1.IndexOf("(") > 0) { txtbx1 = txtbx1.Remove(txtbx.IndexOf("(")); }
                if (txtbx.IndexOf("(") > 0) { txtbx = txtbx.Remove(txtbx.IndexOf("(")); }
                HtmlMeta meta = new HtmlMeta();
                meta.Name = "description";
                meta.Content = "Download " + txtbx + " subtitles available.Find " + txtbx + " Subtitles in 69 different languages.Find best rated " + txtbx1 + " subtitles.Search and Download movie subtitles.";
                MetaPlaceHolder.Controls.Add(meta);
                meta = new HtmlMeta();
                string keyword = "";
                keyword += "download " + reqmovie.Replace("-", " ") + " subtitles,";
                keyword += "download " + reqmovie.Replace("-", " ") + " movie subtitles,";
                keyword += "download subtitles for " + reqmovie.Replace("-", " ") + ",";
                keyword += "download subtitles for movie " + reqmovie.Replace("-", " ") + ",";
                keyword += reqmovie.Replace("-", " ") + " subtitles,";
                keyword += reqmovie.Replace("-", " ") + " movie subtitles,";
                keyword += reqmovie.Replace("-", " ") + " subtitles download,";
                keyword += reqmovie.Replace("-", " ") + " movie subtitles download";
                meta.Name = "keyword";
                meta.Content = keyword;
                MetaPlaceHolder.Controls.Add(meta);
                Page.Title = "Subtitles for " + txtbx + "  - Subtitle Hub";
                popular.Visible = false;
               
                if (Session["language"] != null && Session["language"] == "All Languages")
                {
                //cmd2 = new SqlCommand();
                //ad2 = new SqlDataAdapter();
                //ds2 = new DataSet();
                //cmd2.Connection = conn;
                //cmd2.CommandText = "Select query From sitelinks where query='" + reqmovie.Replace("-", " ").Replace("+", " ") + "'";
                //ad2.SelectCommand = cmd2;
                //ad2.Fill(ds2, "sitelinks");
                //if (ds2.Tables["sitelinks"].Rows.Count > 0)
                if(2>3)
                {
                    string path = Server.MapPath("sitelinks.txt");
                    string filetxt = File.ReadAllText(path);
                    int i = filetxt.IndexOf("{{" + ds2.Tables["sitelinks"].Rows[0][0].ToString() + "==");
                    i += ds2.Tables["sitelinks"].Rows[0][0].ToString().Length + 4;
                    filetxt = filetxt.Substring(i); i = filetxt.IndexOf("}}");
                    filetxt = filetxt.Remove(i);
                    search.Visible = true;
                    search.InnerHtml = "<h3 style='color:#148394;font-size:13px;margin:0;'>Subtitles - " + txtbx1 + " Subtitle at SubtitleHub <br/><a style='color:#777777;font-size:11px;' target='_blank' href='http://www.imdb.com/find?q=" + txtbx.Replace(" ", "+") + "' title='" + txtbx1 + " Subtitles'><img src='http://subtitlehub.com/images/imdb.ico' style='width:30px;height:15px;' alt='" + txtbx1 + " Subtitles' title='" + txtbx1 + " Subtitles' /> - " + txtbx1 + " movie at imdb</a> </h3>" + filetxt;
                    Page.ClientScript.RegisterStartupScript(typeof(System.Web.UI.Page), "hide", @"<script type='text/javascript'>hide();</script>");
                }   
                else
                { 
                    search.Visible = true;
                    search.InnerHtml = "<h3 style='color:#148394;font-size:13px;margin:0;'>Subtitles - " + txtbx1 + " Subtitle at SubtitleHub <br/><a style='color:#777777;font-size:11px;' target='_blank' href='http://www.imdb.com/find?q=" + txtbx.Replace(" ", "+") + "' title='" + txtbx1 + " Subtitles'><img src='http://subtitlehub.com/images/imdb.ico' style='width:30px;height:15px;' alt='" + txtbx1 + " Subtitles' title='" + txtbx1 + " Subtitles' /> - " + txtbx1 + " movie at imdb</a> </h3>";
                    searchhh.Visible = true;
                    searchiframe.Attributes.Add("src", "http://subtitlehub.com/results.aspx?movie=" +txtbx + "");
                    searchiframe.Attributes.Add("onload","hide();");
                }
                }
                else
                {
                    search.Visible = true;
                    search.InnerHtml = "<h3 style='color:#148394;font-size:13px;margin:0;'>Subtitles - " + txtbx1 + " Subtitle at SubtitleHub <br/><a style='color:#777777;font-size:11px;' target='_blank' href='http://www.imdb.com/find?q=" + txtbx.Replace(" ", "+") + "' title='" + txtbx1 + " Subtitles'><img src='http://subtitlehub.com/images/imdb.ico' style='width:30px;height:15px;' alt='" + txtbx1 + " Subtitles' title='" + txtbx1 + " Subtitles' /> - " + txtbx1 + " movie at imdb</a> </h3>";
                    searchhh.Visible = true;
                    searchiframe.Attributes.Add("src", "http://subtitlehub.com/results.aspx?movie=" +txtbx + "");
                    searchiframe.Attributes.Add("onload","hide();");
                }
            }
            else
            {
                Page.Title = "Search Subtitles";
                HtmlMeta meta = new HtmlMeta();
                meta.Name = "description";
                meta.Content = "Search subtitles for TV series and movies.Download subtitles for latest movies.";
                MetaPlaceHolder.Controls.Add(meta);
                meta = new HtmlMeta();
                string keyword = "";
                keyword += "Download Subtitles,Download movie subtitles,subtitle hub, subtitlehub,subtitles download,download subtitles for movies,english subtitles";
                meta.Name = "keyword";
                meta.Content = keyword;
                MetaPlaceHolder.Controls.Add(meta);
                string str = "";
                str += "<h3 style=color:#555555;font-size:20px;>Search Results :</h3>";
                str += "<div align=center style=font-size:16px;color:red;><b>Please Enter Movie Name. </b><b style='font-weight:normal;font-size:12px;'>(Do Not Enter Special Characaters.)</b></div>";
                search.InnerHtml = str;search.Visible = true;
            }
        }conn.Close();
    }
    public static bool UrlExists(string url)
    {
        try
        {
            var request = WebRequest.Create(url) as HttpWebRequest;
            if (request == null) return false;
            request.Method = "HEAD";
            using (var response = (HttpWebResponse)request.GetResponse())
            {
                return response.StatusCode == HttpStatusCode.OK;
            }
        }
        catch (UriFormatException)
        {
            //Invalid Url
            return false;
        }
        catch (WebException)
        {
            //Unable to access url
            return false;
        }
    }
    public string eliminateyear(string s)
    {
        string temp = s;
        if (s.Length > 5)
        {
            int j = s.Length, result; string year = "";
            if (int.TryParse(temp.Substring(j - 4, 4), out result) == true && result > 1900 && result < 2014)
            {
                temp = temp.Replace(" " + result.ToString(), ""); temp = temp.Replace(result.ToString(), "");
            }
        }
        return temp;
    }
    string target = "";
    private string firstlettercapital(string s)
    {
        int i = s.IndexOf(" "); int j = s.Length;
        if (target != "") { target += " "; }
        if (i < 0 || i+1 == j) { target += s[0].ToString().ToUpper() + s.Substring(1); return target; }
        else { target += s[0].ToString().ToUpper() + s.Substring(1).Remove(i - 1); return firstlettercapital(s.Substring(i+1)); }
    }
}
